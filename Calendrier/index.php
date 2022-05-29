
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
  <script>

      $(document).ready(function() {
         var calendar = $('#calendar').fullCalendar({
            editable:true,
    defaultView:'agendaWeek', // Mode d'affichage par défaut
    height: 500, // Hauteur du calendrier
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
   $.ajax({
      url:"update.php",
      type:"POST",
      data:{title:title, start:start, end:end, id:id},
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
  <h2 align="center"><a href="#">Réservation pour consultation</a></h2>
  <h2 align="right"><a href="save.php">Envoyer les disponibilités</a></h2>
  <br />

  <form method="post">
    <select class="form-select" id="doctor" name="select_medecin" required>
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

    <button id="editbtn" class="w-100 btn btn-lg btn-primary" type="submit" name="action" value="select" onclick="getMedecinID()">Selectionner ce médecin</button>
    <input id="hiddenInput" name="IDvalue" type="hidden" value="">

  <div class="container">
     <div id="calendar"></div>
     <a href="save.php"></a>
 </div>
</body>
</html>

