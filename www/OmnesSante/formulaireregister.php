<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Scotto celia, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Index</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/checkout/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    

<link href="assets/dist/css//bootstrap.min.css" rel="stylesheet">

    

    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      
      <h2>Inscription Omnes Santé</h2>
      <p class="lead"> Veuillez renseignez tout les onglets pour votre inscription</p>
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Formulaire</h4>

        <?php
        require('config.php');
        if (isset($_REQUEST['prenom'])){
          // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
          $prenom = stripslashes($_REQUEST['prenom']);
          $prenom = mysqli_real_escape_string($conn, $prenom);
            // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
          $nom_famille = stripslashes($_REQUEST['nom_famille']);
          $nom_famille = mysqli_real_escape_string($conn, $nom_famille);
            // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
          $email = stripslashes($_REQUEST['email']);
          $email = mysqli_real_escape_string($conn, $email);
          // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
          $password = stripslashes($_REQUEST['password']);
          $password = mysqli_real_escape_string($conn, $password);
            // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
          $telephone = stripslashes($_REQUEST['tel']);
          $telephone = mysqli_real_escape_string($conn, $telephone);
            // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
          $ville = stripslashes($_REQUEST['ville']);
          $ville = mysqli_real_escape_string($conn, $ville);
            // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
          $code_postal = stripslashes($_REQUEST['code_postal']);
          $code_postal = mysqli_real_escape_string($conn, $code_postal);
            // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
          $pays = stripslashes($_REQUEST['pays']);
          $pays = mysqli_real_escape_string($conn, $pays);
            // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
          $type_util = stripslashes($_REQUEST['util_type']);
          $type_util = mysqli_real_escape_string($conn, $type_util);
            // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
          $specialite = stripslashes($_REQUEST['specialite']);
          $specialite = mysqli_real_escape_string($conn, $specialite);
          // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
          $upload_cv = stripslashes($_REQUEST['cv']);
          $upload_cv = mysqli_real_escape_string($conn, $upload_cv);
            // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
          $nb_vitale = stripslashes($_REQUEST['nb_vitale']);
          $nb_vitale = mysqli_real_escape_string($conn, $nb_vitale);
            // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
          $nom_carte_credit = stripslashes($_REQUEST['nom_carte_credit']);
          $nom_carte_credit = mysqli_real_escape_string($conn, $nom_carte_credit);
            // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
          $num_carte_credit = stripslashes($_REQUEST['num_carte_credit']);
          $num_carte_credit = mysqli_real_escape_string($conn, $num_carte_credit);
            // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
          $exp_carte_credit = stripslashes($_REQUEST['exp_carte_credit']);
          $exp_carte_credit = mysqli_real_escape_string($conn, $exp_carte_credit);
            // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
          $cvv_carte_credit = stripslashes($_REQUEST['cvv_carte_credit']);
          $cvv_carte_credit = mysqli_real_escape_string($conn, $cvv_carte_credit);
            // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
          $type_carte_credit = stripslashes($_REQUEST['paymentMethod']);
          $type_catre_credit = mysqli_real_escape_string($conn, $type_carte_credit);
          //requéte SQL + mot de passe crypté
            $query1= "INSERT INTO `cartebancaire`(`numCarte`, `type`, `proprietaire`, `dateExp`, `CVV`) VALUES ('$num_carte_credit','$type_carte_credit','$nom_carte_credit','$exp_carte_credit','$cvv_carte_credit')";
            $query2 = "INSERT INTO `utilisateur`(`numCarte`, `typeUtilisateur`, `nom`, `prenom`, `specialite`, `CV`, `ville`, `codePostal`, `pays`, `telephone`, `email`, `carteVitale`, `motDePasse`) 
            VALUES ('$num_carte_credit','$type_util','$nom_famille','$prenom','$specialite', '$upload_cv', '$ville','$code_postal','$pays','$telephone','$email','$nb_vitale','".hash('sha256', $password)."')";
          // Exécute la requête sur la base de données
            $res = mysqli_query($conn, $query1);
            $res = mysqli_query($conn, $query2);

            if($res){
               echo "<div class='sucess'>
                     <h3>Vous êtes inscrit avec succès.</h3>
                     <p>Cliquez ici pour vous <a href='login/login.html'>connecter</a></p>
               </div>";
            }
        }else{
        ?>

<form action="formulaireregister.php" method="post">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Prénom</label>
              <input type="text" class="form-control" id="firstName" name="prenom" placeholder="Omnes" value="" required>
              <div class="invalid-feedback">
                Un prénom valide est requis.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Nom de famille</label>
              <input type="text" class="form-control" id="lastName" name="nom_famille" placeholder="Santé" value="" required>
              <div class="invalid-feedback">
                Un nom de famille valide est requis..
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-muted"></span></label>
              <input type="email" class="form-control" id="email" name="email" placeholder="omnes@exemple.com">
              <div class="invalid-feedback">
                Rentrer une adresse mail valide.
              </div>
            </div>

            <div class="col-12">
              <label for="password" class="form-label">Mot de passe <span class="text-muted"></span></label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Mot De Passe">
              <div class="invalid-feedback">
                Rentrer un mot de passe valide.
              </div>
            </div>

            <div class="col-12">
              <label for="tel" class="form-label">Telephone<span class="text-muted"></span></label>
              <input type="telephone" class="form-control" id="num_tel" name="tel" placeholder="0624658903">
              <div class="invalid-feedback">
                Rentrer un numéro valide.
              </div>
            </div>

            <div class="col-12">
              <label for="ville" class="form-label">Ville</label>
              <input type="text" class="form-control" id="ville" name="ville" placeholder="Nice" required>
              <div class="invalid-feedback">
                Rentrer votre ville.
              </div>
            </div>

            <div class="col-12">
              <label for="codepostale" class="form-label">Code Postal <span class="text-muted"></span></label>
              <input type="text" class="form-control" id="codepostale" name="code_postal" placeholder="06610">
            </div>

            <div class="col-md-5">
              <label for="pays" class="form-label">Pays</label>
              <select class="form-select" id="pays" name="pays" required>
                <option value="">Choisir...</option>
                <option>France</option>
              </select>
              <div class="invalid-feedback">
                Rentrer un pays valide.
              </div>
            </div>

            <div class="col-md-4">
              <label for="utilisateur" class="form-label">Type d'Utilisateur</label>
              <select class="form-select" id="state" name="util_type" required>
                <option value="">Choisir...</option>
                <option>Client</option>
                <option>Administrateur</option>
                <option>Professionnel de santé</option>
              </select>
              <div class="invalid-feedback">
                Donner votre statut.
              </div>
            </div>

            <div class="col-md-4">
              <label for="spé" class="form-label">Spécialité</label>
              <select class="form-select" id="specialite" name="specialite" required>
                <option value="">Choisir...</option>
                <option>Addictologie</option>
                <option>Andrologie</option>
                <option>Cardiologie</option>
                <option>Dermatologie</option>
                <option>Gastro-epatho-enterologie</option>
                <option>Gynecologie</option>
                <option>I.S.T</option>
                <option>Osthéopathie</option>
                
              </select>
              <div class="invalid-feedback">
                Donné votre spécialité.
              </div>
            </div>
            

          <hr class="my-4">

          <h4 class="mb-3">Déposez votre CV</h4>

          <div class="form-check">
            <input type="file" id="same-address" name="cv">
            <input type="submit">
          </div>

        

          <hr class="my-4">

          <h4 class="mb-3">Carte Vitale</h4>

          
          <div class="col-md-6">
              <label for="cv-number" class="form-label">Chiffre de la carte Vitale</label>
              <input type="text" class="form-control" id="cv-number" name="nb_vitale" placeholder="" required>
              <div class="invalid-feedback">
                Les chiffres de la carte vitales sont requis.
              </div>
            </div>

          <h4 class="mb-3">Paiment</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
              <label class="form-check-label" for="credit">Carte de Crédit</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="debit">Carte de Débit</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="paypal">PayPal</label>
            </div>
          </div>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Nom sur la carte</label>
              <input type="text" class="form-control" id="cc-name" name="nom_carte_credit" placeholder="" required>
              <small class="text-muted">Le nom complet écrit sur le carte est requis</small>
              <div class="invalid-feedback">
                Le nom complet écrit sur la carte est requis.
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Chiffres de la carte</label>
              <input type="text" class="form-control" id="cc-number" name="num_carte_credit" placeholder="" required>
              <div class="invalid-feedback">
                Le numéro de carte vitale est requis.
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-expiration" class="form-label">Expiration</label>
              <input type="text" class="form-control" id="cc-expiration" name="exp_carte_credit" placeholder="" required>
              <div class="invalid-feedback">
                La date d'expiration de la carte est requise.
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label">CVV</label>
              <input type="text" class="form-control" id="cc-cvv" name="cvv_carte_credit" placeholder="" required>
              <div class="invalid-feedback">
                Le code de sécurité est requis.
              </div>
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">S'inscrire sur OMNES</button>
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
