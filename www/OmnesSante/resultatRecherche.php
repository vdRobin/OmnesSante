<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Recherche</title>
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
                    <h1 class="fw-light">Section recherche</h1>
                    <p>
                        <a href="index.php" class="btn btn-primary my-2"style="background-color: rgb(143, 198, 248);border-color: rgb(255,255,255)">Accueil</a>
                    </p>
                    
                </div>
            </div>
        </section>

        
        <div class="container marketing">

        <?php
              $min_length = 3;
              //  process de la recherche
              if (isset($_GET["query"])) {
                $query = $_GET["query"];
                
                if (strlen($query) >= $min_length) {
     
                  require "recherche.php";

                }else{echo "Aucun résultat...".'<br>'."Veuillez affiner votre recherche, au moins 3 caractères sont requis pour pouvoir vous attribuer un résultat";}
              }
              ?>

        </div><!-- /.row -->