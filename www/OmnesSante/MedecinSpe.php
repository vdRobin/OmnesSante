<?php session_start();?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Médecins Spécialisés</title>

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
    <?php include "navBarre.php";?>
    </header>

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-Celia">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Spécialisations</h1>
        <p class="lead text-muted">Vous trouverez ci-dessous la liste des spécialitées</p>
        <p>
          <a href="#" class="btn btn-primary my-2">Prendre rendez-vous</a>
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
              <img src="image/cardiologie.jpg"height="400"width="420">
            </svg>

            <div class="card-body">
              <p class="card-text">Cardiologie<br></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Voir</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Prendre rendez vous</button>
                </div>
                <small class="text-muted">disponible dès 8h</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="5" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
              <img src="image/andrologie.jpg"height="400"width="420">
            </svg>
            <div class="card-body">
              <p class="card-text">Andrologie</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Voir</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Prendre rendez vous</button>
                </div>
                <small class="text-muted">disponible à toute heure</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="5" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
              <img src="image/gynecologie.jpg"height="400"width="420">
            </svg>
            <div class="card-body">
              <p class="card-text">Gynécologie</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Voir</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Prendre rendez-vous</button>
                </div>
                <small class="text-muted">disponible à toute heure</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="5" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <img src="image/addictologie.jpg"height="400"width="420">
              </svg>
              <div class="card-body">
                <p class="card-text">Addictologie</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Voir</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Prendre rendez-vous</button>
                  </div>
                  <small class="text-muted">disponible samedi</small>
                </div>
              </div>
            </div>
          </div>
  

          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="5" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <img src="image/ostéopathie.jpg"height="400"width="420">
              </svg>
              <div class="card-body">
                <p class="card-text">Ostéopathie</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Voir</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Prendre rendez-vous</button>
                  </div>
                  <small class="text-muted">disponible samedi</small>
                </div>
              </div>
            </div>
          </div>
  

          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="5" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <img src="image/spermatozoides.jpg"height="400"width="420">
              </svg>
              <div class="card-body">
                <p class="card-text">I.S.T</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Voir</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Prendre rendez-vous</button>
                  </div>
                  <small class="text-muted">disponible à toute heure</small>
                </div>
              </div>
            </div>
          </div>
  

          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="5" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <img src="image/épiderme.jpg" height="400"width="420">
              </svg>
              <div class="card-body">
                <p class="card-text">Dermatologie</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Voir</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Prendre rendez-vous</button>
                  </div>
                  <small class="text-muted">disponible le Lundi et Jeudi</small>
                </div>
              </div>
            </div>
          
        </div>
<div class="col">
           <div class="card shadow-sm">
             <svg class="bd-placeholder-img card-img-top" width="100%" height="5" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><img src="image/digestif.jpg"height="400"width="420"></svg>

            <div class="card-body">
              <p class="card-text">Gastro-Hépato-Entérologie <br>
               </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Voir</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Prendre rendez-vous</button>
                </div>
                <small class="text-muted">tout les mercredis</small>
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
    <p class="mb-1">2022-Omnes Santé</p>
    
  </div>
</footer>


    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
