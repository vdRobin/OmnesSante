
<?php
//index.php

?>
<!DOCTYPE html>
<html>
<head>
  <title>Réservation pour consultation</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/locale-all.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />

   <link href="assets/dist/css//bootstrap.min.css" rel="stylesheet">
  <!-- css pour le bootstrap -->
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgb(143, 198, 248);
      border: solid #8FC6F8;
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em #8FC6F8, inset 0 .125em .5em#8FC6F8;
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }

    /* css pour le dropDown */

    li {
      float: left;
    }

    li a,
    .dropbtn {
      display: inline-block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    li.dropdown {
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }

    .dropdown-content a:hover {
      background-color: #f1f1f1;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }
  </style>

  <script>

      $(document).ready(function() {
         var calendar = $('#calendar').fullCalendar({
            editable:true,
    defaultView:'agendaWeek', // Mode d'affichage par défaut
    height:500, // Hauteur du calendrier
    aspectRatio: 1,
    locale:'fr',

    header:{
       left:'prev,next today',
       center:'title',
       right:''
   },
   events: 'load.php',
   selectable:true,
   selectHelper:true,

   select: function(start, end, allDay)
   {
       var title = prompt("Enter Event Title");
       if(title)
       {
          var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
          var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
          $.ajax({
             url:"insert.php",
             type:"POST",
             data:{title:title, start:start, end:end},
             success:function()
             {
                calendar.fullCalendar('refetchEvents');
                alert("Added Successfully");
            }
        })
      }
  },
  editable:true,
  eventResize:function(event)
  {
   var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
   var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
   var title = event.title;
   var id = event.id;
   var mID= 2;
   $.ajax({
      url:"update.php",
      type:"POST",
      data:{title:title, start:start, end:end, id:id, mID:mID},
      success:function(){
         calendar.fullCalendar('refetchEvents');
         alert('Event Update');
     }
 })
},

eventDrop:function(event)
{
   var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
   var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
   var title = event.title;
   var id = event.id;
   $.ajax({
      url:"update.php",
      type:"POST",
      data:{title:title, start:start, end:end, id:id},
      success:function()
      {
         calendar.fullCalendar('refetchEvents');
         alert("Event Updated");
     }
 });
},

eventClick:function(event)
{
   if(confirm("Are you sure you want to remove it?"))
   {
      var id = event.id;
      $.ajax({
         url:"delete.php",
         type:"POST",
         data:{id:id},
         success:function()
         {
            calendar.fullCalendar('refetchEvents');
            alert("Event Removed");
        }
    })
  }
},

});
     });

      function getMedecinID()
      {
      var select = document.getElementById('doctor');
      var value = select.options[select.selectedIndex].value;
      document.getElementById("hiddenInput").value=value;
      window.alert(value);
      }
   
 </script>
</head>
<body>
  <br />
  <h2 align="center"><a href="#">Disponibilités du médecin</a></h2>
  <br />


    <div class="container">
     <div id="calendar"></div>
      </div>

   <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
      <script src="form-validation.js"></script>
</body>
</html>

