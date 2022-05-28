<?php session_start();?>
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
    <link href="assets/dist/css//bootstrap.min.css" rel="stylesheet">

    <script>
      
    </script>
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
      <?php include "navBarre.php";?>
    </header>

    <main>
    <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">
        <br> <br> <br> <br>
        <div class="row">

          <p> Administrateur: 	<?php print $_SESSION['nom']." ".$_SESSION['prenom'];?>
          <br><br>
          Nom: <?php echo $_SESSION['prenom'];?>
          <br><br>
          Courriel: <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($_SESSION['photo'] ).'"/>'?>
          <br><br>

          <div class="col-lg-7 offset-lg-4 ">
            <svg class="bd-placeholder-img rounded-circle " width="140" height="140" xmlns="http://www.w3.org/2000/svg"
            role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
            <rect width="100%" height="100%" fill="#777" /><a href="formulaireregister.html">
              <svg style="float: right;" xmlns="http://www.w3.org/2000/svg" width="140" height="140" color="#fff"
              class="bi bi-person-circle" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" /><!-- Code SVG pour le logo account -->
              <path fill-rule="evenodd"
              d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg></a>
          </svg>
          
          <h2 class="fw-normal">VOTRE COMPTE</h2>

          <p><br>Voici la liste des médecins :</p>
          <br>

          <?php

          /*require('config.php');

          $q = "SELECT * FROM `utilisateur` WHERE typeUtilisateur=2";
          $result = mysqli_query($conn, $q) or die();
          $rows = mysqli_num_rows($result);

          while ($row=mysqli_fetch_assoc($result)) {
            echo "ID: ".$row['utilisateurID'].'<br>';
            echo "nom: ".$row['nom'].'<br>';
            echo "prenom: ".$row['prenom'].'<br>';
            echo "specialite: ".$row['specialite'].'<br><br>';

      /*$_SESSION['numCarte'] = $row['numCarte'];
      $_SESSION['typeUtilisateur'] = $row['typeUtilisateur'];
      $_SESSION['nom'] = $row['nom'];
      $_SESSION['prenom'] = $row['prenom'];
      $_SESSION['specialite'] = $row['specialite'];
      $_SESSION['CV'] = $row['CV'];
      $_SESSION['ville'] = $row['ville'];
      $_SESSION['codePostal'] = $row['codePostal'];
      $_SESSION['pays'] = $row['pays'];
      $_SESSION['telephone'] = $row['telephone'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['disponibilite'] = $row['disponibilite'];
      $_SESSION['carteVitale'] = $row['carteVitale'];
      $_SESSION['photo'] = $row['photo'];
    }*/
    //https://stackoverflow.com/questions/62573506/populating-a-bootstrap-dropdown-from-an-ms-sql-database
    ?>



   <!-- <p><a class="btn btn-secondary" href="#">Modifier le médecin selectionné &raquo;</a></p>
    <p><a class="btn btn-secondary" href="supprimerMedecin.php">Supprimer le médecin &raquo;</a></p>
    <p><a class="btn btn-secondary" href="#">Ajouter un médecin &raquo;</a></p>-->




<form method="post" action="modifierMedecin.php">
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
      Donner votre statut.
    </div>

    <br>
    <button id="editbtn" class="w-100 btn btn-lg btn-primary" type="submit" name="action" value="labo">Modifier les informations du laboratoire</button>
      
    <br>

    <button id="editbtn" class="w-100 btn btn-lg btn-primary" type="submit" name="action" value="modifier" >Modifier le médecin</button>

    <br>
    <br>

    <button id="deletebtn" class="w-100 btn btn-lg btn-primary" type="submit" name="action" value="supprimer" >Supprimer le médecin</button>
 
    <input id="hiddenInput" name="medID" type="hidden" value="13">

  </form>




 

  </div><!-- /.col-lg-4 -->
  <div  class="col-lg-5">

  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">

  </div><!-- /.col-lg-4 -->
</div><!-- /.row -->


<!-- START THE FEATURETTES -->

<hr class="featurette-divider">

<hr class="featurette-divider">

<hr class="featurette-divider">

<!-- /END THE FEATURETTES -->

</div><!-- /.container -->


<!-- FOOTER -->
<footer class="container">
  <p class="float-end"><a href="#">Haut de page</a></p>
  <p>&copy; 2022–2023 OMNES Santé, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
</footer>
</main>

<script src="assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>