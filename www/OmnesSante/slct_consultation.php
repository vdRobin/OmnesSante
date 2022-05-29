<?php session_start(); ?>
<!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Scotto celia, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Test Calendrier</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/checkout/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/locale-all.js"></script>
    
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

   eventOverlap:false,

   events: {
    url: 'load.php',
          data: function() { // a function that returns an object
            return {
              medecinID: getMedecinID(),
            };

          }
        },

        selectable:true,
        selectHelper:true,

        select: function(start, end, allDay)
        {
         var title =getTitle() ;
         if(title)
         {
          var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
          var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
          var IDvalue = getMedecinID();
          $.ajax({
           url:"insert.php",
           type:"POST",
           data:{title:title, start:start, end:end, IDvalue:IDvalue},
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
       var IDvalue= getMedecinID();
       $.ajax({
        url:"update.php",
        type:"POST",
        data:{title:title, start:start, end:end, id:id, IDvalue:IDvalue},
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
       var IDvalue= getMedecinID();
       $.ajax({
        url:"update.php",
        type:"POST",
        data:{title:title, start:start, end:end, id:id, IDvalue:IDvalue},
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

      function loadMedecinEvents() {
        $('#calendar').fullCalendar('refetchEvents')
      }

      function getMedecinID()
      {
        var select = document.getElementById('doctor');
        var value = select.options[select.selectedIndex].value;
        document.getElementById("hiddenInput").value=value;
        return value;
      }

      function getTitle(){
        return '<?= $_SESSION['nom']." ".$_SESSION['prenom'];?>';
      }

    </script>


    <link href="assets/dist/css//bootstrap.min.css" rel="stylesheet">



   <!-- Custom styles for this template -->
   <link href="form-validation.css" rel="stylesheet">
 </head>
 <body class="bg-light">
 <header>
    <?php include "navBarre.php"; ?>
  </header>

  <div class="container py-5">
    <main>
    <div class="py-5 text-center ">

<h2>   </h2>
</div>
      <div class="py-5 text-center ">

        <h2>Disponibilités du médecin</h2>
        <p class="lead"> Veuillez renseignez toutes les plages horaires indisponible</p>
      </div>

      <div class="row g-5">
        <div class="col-md-5 col-lg-4 order-md-last">
          <h4 class="d-flex justify-content-between align-items-center mb-3">

          </div>
          <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">Formulaire</h4>
            <select class="form-select" id="doctor" name="select_medecin"  onchange="loadMedecinEvents()"
            required>
            <option value="">Choisir...</option>

            <?php
              require('config.php');

              $q = "SELECT * FROM `utilisateur` WHERE typeUtilisateur=2";
              $result = mysqli_query($conn, $q) or die();
              $rows = mysqli_num_rows($result);
              if ($result->num_rows > 0) 
              {
                while ($row=mysqli_fetch_assoc($result)) {

                  echo "<option value=".$row["utilisateurID"].">".$row["nom"]." ".$row["prenom"]."</option>";
                }
              }
            ?>

          </select>
          <div class="invalid-feedback">
            Selectionnez votre médecin.
          </div>

          <input id="hiddenInput" name="IDvalue" type="hidden" value="13">

        </div>
      </div>
    </main>
    <br>
    <br>

    <div class="container">
     <div id="calendar"></div>
   </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">&copy; 2022–2023 Omnes Compagny</p>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Privacy</a></li>
        <li class="list-inline-item"><a href="#">Terms</a></li>
        <li class="list-inline-item"><a href="#">Support</a></li>
      </ul>
    </footer>
  </div>


  <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

  <script src="form-validation.js"></script>
</body>
</html>
