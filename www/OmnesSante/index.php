<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="generator" content="Hugo 0.98.0">
  <title>Omnes Santé</title>
  <link rel="icon" sizes="16x16" href="image/logo1.jpg">

  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
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
  <link href="carousel.css" rel="stylesheet">
</head>

<body>
  <header>
    <?php include "navBarre.php"; ?>
  </header>

  <!-- FIN NAVBAR
  ================================================== 
          DEBUT CARROUSSEL-->
  <main>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <div class="carousel-inner">
        <!-- Carrousselle 1 -->
        <div class="carousel-item active">
          <img src="image/medicineUndraw.png" alt="medicineUndraw" height="743" width="1045">
          <div class="container">
            <div class="carousel-caption text-end">
              <h1 style="color: rgb(0,0,0)">Nous sommes à votre écoute</h1>
              <p style="color: rgb(0,0,0)">Nos practiciens sont mobilisés au quotidien pour votre santé !</p>
              <form class="d-flex" role="search" action="resultatRecherche.php" method="get" target="_self">
                <input class="form-control me-2 offset-lg-5" type="search" name="query" id="query" placeholder="Recherchez la réponse à toutes vos questions" aria-label="Search">
                <button class="btn btn-outline-success" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="rgb(143, 198, 248)" class="bi bi-search-heart" viewBox="0 0 16 16">
                    <path d="M6.5 4.482c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018Z" />
                    <path d="M13 6.5a6.471 6.471 0 0 1-1.258 3.844c.04.03.078.062.115.098l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1.007 1.007 0 0 1-.1-.115h.002A6.5 6.5 0 1 1 13 6.5ZM6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11Z" />
                  </svg></button> <!-- le logo "recherche" en forme de coeur pour faire la recherche  -->
              </form>
            </div>
          </div>
        </div>

        <!-- Carrousselle 2 -->
        <div class="carousel-item text-end">
          <img src="image/videoUndraw.png" alt="videoUndraw" height="560" width="800">
          <div class="container">
            <div class="carousel-caption text-start">
              <h1 style="color: rgb(0,0,0)">Nouveauté : consultation en ligne</h1>
              <p style="color: rgb(0,0,0)">Nous proposons maintenant des consultations en ligne <br> pour vous obtenir
                un rendez vous plus rapidement</p>

              <form class="d-flex" role="search" action="resultatRecherche.php" method="get" target="_self">
                <button class="btn btn-outline-success" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="rgb(143, 198, 248)" class="bi bi-search-heart" viewBox="0 0 16 16">
                    <path d="M6.5 4.482c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018Z" />
                    <path d="M13 6.5a6.471 6.471 0 0 1-1.258 3.844c.04.03.078.062.115.098l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1.007 1.007 0 0 1-.1-.115h.002A6.5 6.5 0 1 1 13 6.5ZM6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11Z" />
                  </svg></button> <!-- le logo "recherche" en forme de coeur pour faire la recherche  -->
                <input class="form-control me-2" type="search" name="query" id="query" placeholder="Recherchez la réponse à toutes vos questions" aria-label="Search">
              </form>
            </div>
          </div>
        </div>

        <!-- Carrousselle 3 -->
        <div class="carousel-item">
          <img src="image/PharmaUndraw.png" alt="PharmaUndraw" height="560" width="800">
          <div class="container">
            <div class="carousel-caption text-end">
              <h1>A venir : Pharmacie en ligne</h1>
              <p>En juillet 2022, vous pourrez enfin commander vos médicaments grâce à <br>notre pharmacie en ligne,
                durée de livraison : 1h30</p>

                <form class="d-flex" role="search" action="resultatRecherche.php" method="get" target="_self">
                <input class="form-control me-2 offset-lg-5" type="search" name="query" id="query" placeholder="Recherchez la réponse à toutes vos questions" aria-label="Search">
                <button class="btn btn-outline-success" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="rgb(143, 198, 248)" class="bi bi-search-heart" viewBox="0 0 16 16">
                    <path d="M6.5 4.482c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018Z" />
                    <path d="M13 6.5a6.471 6.471 0 0 1-1.258 3.844c.04.03.078.062.115.098l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1.007 1.007 0 0 1-.1-.115h.002A6.5 6.5 0 1 1 13 6.5ZM6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11Z" />
                  </svg></button> <!-- le logo "recherche" en forme de coeur pour faire la recherche  -->
              </form>
            
            </div>
          </div>
        </div>
      </div>

      <!-- Flèches pour changer de slides -->
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


    <!-- Fin Carroussel
  ================================================== -->
    <!-- Début des CV  -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img src="image/kangoo.png" alt="maboul" height="150" width="150">
          <h2 class="fw-normal">DR.Pascal KANGOO</h2>
          <p>Elue Médecin Généraliste du mois d'avril 2022 dans votre région!</p>
          <!-- Button to launch a modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="background-color: rgb(143, 198, 248);border-color: rgb(143, 198, 248)"> Voir CV</button>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <!--zone d'ombre autour de la fenetre-->
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-body"><img id="image" src="image/cv_pascal_kangoo.png" alt="Click on button" height="700" width="600" /></div>
                <div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: rgb(143, 198, 248);border-color: rgb(143, 198, 248)">Fermer</button></div>
              </div>
            </div>
          </div>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">

          <img src="image/megane.png" alt="maboul" height="150" width="150">

          <h2 class="fw-normal">DR.Mégane COUPEE</h2>
          <p>Disponible 24h/24 le Weekend pour une consultation en visioconférence</p>
          <!-- Button to launch a modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1" style="background-color: rgb(143, 198, 248);border-color: rgb(143, 198, 248)"> Voir
            CV</button>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-body"><img id="image" src="image/cv_megane_coupe.png" alt="Click on button" height="700" width="600" /></div>
                <div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: rgb(143, 198, 248);border-color: rgb(143, 198, 248)">Fermer</button></div>
              </div>
            </div>
          </div>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <img src="image/maboul.png" alt="maboul" height="150" width="150">

          <h2 class="fw-normal">DR.Emma BOUL</h2>
          <p>Ce jeune médecin vient de s'installer dans la région ! Soutenez le via sa cagnotte leechee :)</p>
          <!-- Button to launch a modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2" style="background-color: rgb(143, 198, 248);border-color: rgb(143, 198, 248)"> Voir
            CV</button>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-body"><img id="image" src="image/cv_emma_boul.png" alt="Click on button" height="700" width="600" /></div>
                <div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: rgb(143, 198, 248);border-color: rgb(143, 198, 248)">Fermer</button></div>
              </div>
            </div>
          </div>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->
      <!-- featurette 1 -->
      <hr class="featurette-divider">
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">Le virus circule toujours !</h2>
          <p class="lead">Ne baissez pas votre garde, le virus est toujours la, continuez d'appliquer ces gestes barrière. Venez vous faire tester en pharmacie ou dans nos centre au moindre signe de fièvre.</p>
        </div>
        <div class="col-md-5">
          <img id="image" src="image/covidPrevention.jpg" alt="Click on button" width="500" height="500">

        </div>
      </div>

      <!-- featurette 2 -->
      <hr class="featurette-divider">
      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading fw-normal lh-1">Omnes Santé est le nouveau leader mondial de la santé. </h2>
          <p class="lead">Nos spécialitées sont très variées : Andrologie, Gynécologie, Dermatologie, Addictologie...
            Nos spécialistes sont formés pour vous accompagner au mieux dans votre cursus. Laissez vous le temps de vous balader sur ce site internet pour en apprendre d'avantage sur notre compagnie.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img id="image" src="image/pharmacie.jpg" alt="Click on button" width="500" height="500">

        </div>
      </div>

      <!-- featurette 3 -->
      <hr class="featurette-divider">
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">Nos centres Santé au plus proche de vous.</span>
          </h2>
          <p class="lead">Notre plus gros centre se trouve en plein coeur de la mégalopole parisienne au 43 Quai de Grenelle, 75015 Paris. Notre centre est ouvert toute l'année, 7j/7 de 8h à 22h.Vous pouvez contacter notre service patient au 07 68 70 46 77.</p>
        </div>
        <div class="col-md-5"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.367509221572!2d2.282633475367155!3d48.85120200953895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcda73a49149d471f!2sOMNES%20Education!5e0!3m2!1sfr!2sfr!4v1653569207672!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>



      <hr class="featurette-divider">

      <!-- FIN DES FEATURETTES -->
    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="container">
      <p class="float-end"><a href="#">Back to top</a></p>
      <p>&copy; 2022 OMNES-Santé. &middot; <a href="index-2.html">Nous contacter</a></p>
    </footer>
  </main>

  <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>