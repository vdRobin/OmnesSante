<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.98.0">
  <title>Laboratoire de biologie médicale</title>
  <link rel="icon" sizes="16x16" href="image/logo.jpg">

  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">





  <link href="assets/dist/css//bootstrap.min.css" rel="stylesheet">

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
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
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


</head>

<body>

  <header>
    <?php include "navBarre.php"; ?>
  </header>

  <main>
    <section class="py-5 text-center container">
      <div class="row py-lg-Celia">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">Nos services</h1>
          <p class="lead text-muted">
        
            Vous trouverez ci-dessous tout nos services mis a disposition pour vous, dans notre laboratoire.
            <br> Laboratoire Omnes Santé
            <br> Situé au 37 quai de Grenelle 7015, Paris
            <br> Telephone: +33 01 22 33 44 55
            <br> Email: labo.biologie@omnessante.fr
          </p>
        </div>
      </div>
    </section>
    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="5" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <img src="image/prisedesang1.jpg" height="400" width="420">
              </svg>

              <div class="card-body">
                <p class="card-text">PRISE ET EXAMEN DU SANG: <br>
                  Règles avant: -venir a jeun <br>
                  Règles pendant: -ne pas stresser</p>
                <div class="d-flex justify-content-between align-items-center">

                  <small class="text-muted">disponible dès 8h</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="5" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <img src="image/covid.jpg" height="400" width="420">
              </svg>

              <div class="card-body">
                <p class="card-text">TEST ANTIGENIQUE:
                  <br>
                  Règles avant:-porter un masque<br>
                  Règles après:-rester confiné si le test est postif
                </p>
                <div class="d-flex justify-content-between align-items-center">

                  <small class="text-muted">disponible à toute heure</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="5" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <img src="image/radio.jpg" height="400" width="420">
              </svg>

              <div class="card-body">
                <p class="card-text">RADIO:<br>
                  Règles avant:-enlever ses boucles d'oreilles ou piercing
                  Règles après:-attendre l'avis du médecin sur la radio</p>
                <div class="d-flex justify-content-between align-items-center">

                  <small class="text-muted">disponible samedi</small>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="5" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><img src="image/dondusang.jpg" height="400" width="420"></svg>

              <div class="card-body">
                <p class="card-text">DON DU SANG:<br>
                  Règles avant:-être a juen, ne pas avoir de tatouage.
                  Règles après:-Manger du sucre
                </p>
                <div class="d-flex justify-content-between align-items-center">

                  <small class="text-muted">dès 9h</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="5" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><img src="image/consultation.jpg" height="400" width="420"></svg>

              <div class="card-body">
                <p class="card-text">CONSULTATION GENERALISTE:<br>
                  Règles avant:-prendre rendez-vous, porter un masque.
                  Règles après:-aller a la pharmacie avec ordonnance.
                </p>
                <div class="d-flex justify-content-between align-items-center">

                  <small class="text-muted">selon le médecin</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="5" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><img src="image/VIH.jpg" height="400" width="420"></svg>

              <div class="card-body">
                <p class="card-text">SEROLOGIE VIH:<br>
                  Règles avant:-être a juen, carte vitale.<br>
                  Règles après:-Mot de passe pour vérifer le test.
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <small class="text-muted">dés 6h</small>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="5" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><img src="image/ostheo.jpg" height="400" width="420"></svg>

              <div class="card-body">
                <p class="card-text">SEANCE D'OSTHEO:<br>
                  Règles avant:-savoir ou se situe vos tensions.<br>
                  Règles après:-éviter de faire du sport.
                </p>
                <div class="d-flex justify-content-between align-items-center">

                  <small class="text-muted">dès 8h</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="5" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><img src="image/digestion.jpg" height="400" width="420"></svg>

              <div class="card-body">
                <p class="card-text">SEANCE DIGESTION:<br>
                  Règles avant:-savoir son alimentation.<br>
                  Règles après:-appliquer les conseils.</p>
                <div class="d-flex justify-content-between align-items-center">

                  <small class="text-muted">dès 10h</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="5" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><img src="image/addict.jpg" height="400" width="420"></svg>

              <div class="card-body">
                <p class="card-text">CERCLE DE PAROLE:<br>
                  Règles avant:-être sobre.<br>
                  Règles après:-appliquer les conseils.
                </p>
                <div class="d-flex justify-content-between align-items-center">

                  <small class="text-muted">à tout instant</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>

  <footer class="text-muted py-5">
    <div class="container">
      <p class="float-end mb-1">
        <a href="#">Haut de page</a>
      </p>
      <p class="mb-1">2022-2223 OMNES SANTE</p>

    </div>
  </footer>


  <script src="assets/dist/js/bootstrap.bundle.min.js"></script>


</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>