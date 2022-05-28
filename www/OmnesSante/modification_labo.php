<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Scotto celia, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Modification du laboratoire</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/checkout/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    
<style>

.b-example-divider {
      height: 3rem;
      background-color: rgb(143, 198, 248);
      border: solid #8FC6F8;
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em #8FC6F8, inset 0 .125em .5em#8FC6F8;
    }

</style>


<link href="assets/dist/css//bootstrap.min.css" rel="stylesheet">

    

    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<div class="container ">
  <main>
    <div class="py-5 text-center ">
      
      <h2>Modification du laboratoire d'analyses médicales</h2>
      <p class="lead"> Veuillez renseignez tout les onglets pour compléter la modification</p>
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Modification du laboratoire</h4>

        <?php
        require('config.php');
        if (isset($_REQUEST['nom_labo'])){


          // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
          $nom_labo = stripslashes($_REQUEST['nom_labo']);
          $nom_labo = mysqli_real_escape_string($conn, $nom_labo);
            // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
          $email = stripslashes($_REQUEST['email']);
          $email = mysqli_real_escape_string($conn, $email);
            // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
          $tel_labo = stripslashes($_REQUEST['tel_labo']);
          $tel_labo = mysqli_real_escape_string($conn, $tel_labo);
            // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
          $adresse = stripslashes($_REQUEST['adresse']);
          $adresse = mysqli_real_escape_string($conn, $adresse);
          //requéte SQL + mot de passe crypté
            $query= "UPDATE `laboratoire` SET `nom`='$nom_labo',`email`='$email',`telephone`='$tel_labo',`adresse`='$adresse' WHERE 1";

          // Exécute la requête sur la base de données
            $res = mysqli_query($conn, $query);

            if($res){
               echo "<div class='sucess'>
                     <h3>Le laboratoire a été modifié avec succès.</h3>
                     <p>Cliquez ici pour retourner sur votre <a href='CompteAdmin.php'>espace administrateur</a></p>
               </div>";
            }
        }else{
        ?>

<form action="modification_labo.php" method="post" enctype="multipart/form-data">
          <div class="row g-3">

            <div class="col-sm-6">
              <label for="Name" class="form-label">Nom du laboratoire</label>
              <input type="text" class="form-control" id="Name" name="nom_labo" placeholder="Nom du laboratoire" value="" required>
              <div class="invalid-feedback">
                Le nom du laboratoire est requis.
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email du laboratoire<span class="text-muted"></span></label>
              <input type="email" class="form-control" id="email" name="email" placeholder="omnes@exemple.com">
              <div class="invalid-feedback">
                Rentrer une adresse mail valide.
              </div>
            </div>


            <div class="col-12">
              <label for="tel" class="form-label">Numéro de téléphone du laboratoire<span class="text-muted"></span></label>
              <input type="telephone" class="form-control" id="num_tel" name="tel_labo" placeholder="0624658903">
              <div class="invalid-feedback">
                Rentrer un numéro de téléphone valide.
              </div>
            </div>

            <div class="col-12">
              <label for="ville" class="form-label">Adresse du laboratoire</label>
              <input type="text" class="form-control" id="adresse" name="adresse" placeholder="30 Rue Emile Zola, 75016, Paris" required>
              <div class="invalid-feedback">
                Rentrer l'adresse du laboratoire.
              </div>
            </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Modifier les infomations du laboratoire</button>
        </form>
        <?php } ?>
      </div>
    </div>
  </main>

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
