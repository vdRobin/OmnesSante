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
        <h1 class="fw-light">Nos Médecins Généralistes</h1>
        <p class="lead text-muted">Vous trouverez ci-dessous la liste de nos practiciens généralistes</p>
      </div>
    </div>
  </section>

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
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <!--zone d'ombre autour de la fenetre-->
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-body"><img id="image" src="image/cv_pascal_kangoo.png" alt="Click on button"
                    height="700" width="600" /></div>
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
          <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-body"><img id="image" src="image/cv_megane_coupe.png" alt="Click on button"
                    height="700" width="600" /></div>
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


<div class="col-lg-4 py-lg-5">
          <img src="image/docteur1.png" alt="maboul" height="150" width="150">

          <h2 class="fw-normal">DR.Chris Qardiak</h2>
          <p>Ce jeune médecin vient de s'installer dans la région ! </p>
<!-- Button to launch a modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1" style="background-color: rgb(143, 198, 248);border-color: rgb(143, 198, 248)"> Voir
  CV</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body"><img id="image" src="image/cv_megane_coupe.png" alt="Click on button"
          height="700" width="600" /></div>
      <div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: rgb(143, 198, 248);border-color: rgb(143, 198, 248)">Fermer</button></div>
    </div>
  </div>
</div>
</div><!-- /.col-lg-4 -->


<div class="col-lg-4 py-lg-5">
          <img src="image/docteur2.png" alt="maboul" height="150" width="150">

          <h2 class="fw-normal">DR.celia SCOTTO</h2>
          <p>Ce jeune médecin vient de s'installer dans la région ! </p>
<!-- Button to launch a modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1" style="background-color: rgb(143, 198, 248);border-color: rgb(143, 198, 248)"> Voir
  CV</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body"><img id="image" src="image/cv_megane_coupe.png" alt="Click on button"
          height="700" width="600" /></div>
      <div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: rgb(143, 198, 248);border-color: rgb(143, 198, 248)">Fermer</button></div>
    </div>
  </div>
</div>
</div><!-- /.col-lg-4 -->

<div class="col-lg-4 py-lg-5">
          <img src="image/docteur3.png" alt="maboul" height="150" width="150">

          <h2 class="fw-normal">DR.celia SCOTTO</h2>
          <p>Ce jeune médecin vient de s'installer dans la région ! </p>
<!-- Button to launch a modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1" style="background-color: rgb(143, 198, 248);border-color: rgb(143, 198, 248)"> Voir
  CV</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body"><img id="image" src="image/cv_megane_coupe.png" alt="Click on button"
          height="700" width="600" /></div>
      <div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: rgb(143, 198, 248);border-color: rgb(143, 198, 248)">Fermer</button></div>
    </div>
  </div>
</div>
</div><!-- /.col-lg-4 -->

      </div><!-- /.row -->





     