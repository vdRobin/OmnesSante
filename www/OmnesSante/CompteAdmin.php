<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.98.0">
  <title>Omnes Santé</title>
  <link rel="icon" sizes="16x16" href="image/logo.jpg">

  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">

  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/checkout/">
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
        editable: true,
        defaultView: 'agendaWeek', // Mode d'affichage par défaut
        height: 500, // Hauteur du calendrier
        aspectRatio: 0.1,
        locale: 'fr',

        header: {
          left: 'prev,next today',
          center: 'title',
          right: ''
        },
        events: 'loadDispo.php',
        selectable: true,
        selectHelper: true,

        select: function(start, end, allDay) {
          var title = prompt("Enter Event Title");
          if (title) {
            var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
            var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
            $.ajax({
              url: "insertDispo.php",
              type: "POST",
              data: {
                title: title,
                start: start,
                end: end
              },
              success: function() {
                calendar.fullCalendar('refetchEvents');
                alert("Added Successfully");
              }
            })
          }
        },
        editable: true,
        eventResize: function(event) {
          var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
          var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
          var title = event.title;
          var id = event.id;
          $.ajax({
            url: "updateDispo.php",
            type: "POST",
            data: {
              title: title,
              start: start,
              end: end,
              id: id
            },
            success: function() {
              calendar.fullCalendar('refetchEvents');
              alert('Event Update');
            }
          })
        },

        eventDrop: function(event) {
          var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
          var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
          var title = event.title;
          var id = event.id;
          $.ajax({
            url: "updateDispo.php",
            type: "POST",
            data: {
              title: title,
              start: start,
              end: end,
              id: id
            },
            success: function() {
              calendar.fullCalendar('refetchEvents');
              alert("Event Updated");
            }
          });
        },

        eventClick: function(event) {
          if (confirm("Are you sure you want to remove it?")) {
            var id = event.id;
            $.ajax({
              url: "deleteDispo.php",
              type: "POST",
              data: {
                id: id
              },
              success: function() {
                calendar.fullCalendar('refetchEvents');
                alert("Event Removed");
              }
            })
          }
        },

      });
    });
  </script>



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


  <!-- Custom styles for this template -->
  <link href="carousel.css" rel="stylesheet">
</head>

<body>

  <header>
    <?php include "navBarre.php"; ?>
  </header>

  <main>
    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
      <br> <br> <br> <br>
      <div class="row">
        <div class="col-lg-7 offset-lg-2 ">
          <svg class="bd-placeholder-img rounded-circle " width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
            <rect width="100%" height="100%" fill="#777" /><a href="formulaireregister.html">
              <svg style="float: right;" xmlns="http://www.w3.org/2000/svg" width="140" height="140" color="#fff" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" /><!-- Code SVG pour le logo account -->
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
              </svg></a>
          </svg>

          <h2 class="fw-normal">VOTRE COMPTE</h2>

          <p><br> Mode Administrateur
          <br>
          Nom: <?php echo $_SESSION['nom']; ?>
          <br>
          Prenom: <?php echo $_SESSION['prenom']; ?>
          <br>
        </p>

          <p><br>Veuillez trouvez ci-joint vos accréditations.</p>
          <br>


          <form method="post" action="choixAdmin.php">


            <br>


            <button id="editbtn" class="w-100 btn btn-lg btn-primary" type="submit" name="action" value="labo">Modifier les informations du laboratoire</button>
            <br>
            <br>
            <button id="editbtn" class="w-100 btn btn-lg btn-primary" type="submit" name="action" value="medecin">Modifier et supprimer les médecins</button>
            <br>
            <br>
            <button id="editbtn" class="w-100 btn btn-lg btn-primary" type="submit" name="action" value="dispo">Modifier les disponibilités des médecins</button>
            <br>
            <br>
            <button id="editbtn" class="w-100 btn btn-lg btn-primary" type="submit" name="action" value="ajouter">Ajouter un médecin</button>
            <br>
            <br>
            <button id="editbtn" class="w-100 btn btn-lg btn-primary" type="submit" name="action" value="xml">Créer un fichier XML pour un médecin</button>
            <form>


        </div><!-- /.col-lg-4 -->
        <div class="col-lg-5">





        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">



        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <h2 class="featurette-heading fw-normal lh-1"> Emplois du temps. <span class="text-muted">
              (suivant vos diponibilités).</span></h2>
          <p class="lead">Modifier si vous avez un empêchement </p>
        </div>
        <div class="col-md-7">

          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#eee" />
          <div id="calendar"></div>
          </svg>



        </div>

        <hr class="featurette-divider">




        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->


      <!-- FOOTER -->
      <footer class="container">
        <p class="float-end"><a href="#">Haut de page</a></p>
        <p>&copy; 2022–2023 OMNES Santé, Inc.</p>
      </footer>
  </main>

  <script src="assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>