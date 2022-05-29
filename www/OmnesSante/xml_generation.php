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

$nomFichier=$_SESSION['nom'];
$nom=$_SESSION['nom'];
$prenom=$_SESSION['prenom'];
$email=$_SEESION['email'];
$tel=$_SESSION['telephone'];
$ville=$_SESSION['ville'];
$specialite=$_SESSION['specialite'];
$photo=$_SESSION['photo'];


$xml = new XMLWRITER();
$xml->openUri($nomFichier);

$xml->startDocument('1.0', 'utf-8');

$xml->startElement('CV');
$xml->startElement('Medecin');

$xml->writeElement('Nom', $nom);
$xml->writeElement('Prenom', $prenom);
$xml->writeElement('Email', $email);
$xml->writeElement('Telephone', $tel);
$xml->writeElement('Ville', $ville);
$xml->writeElement('Specialité', $specialite);
$xml->writeElement('Photo', $photo);

$xml->endElement();
$xml->endElement();

header('Location: CompteAdmin.php');

?>

<script>
    function getMedecinID()
      {
      var select = document.getElementById('doctor');
      var value = select.options[select.selectedIndex].value;
      document.getElementById("hiddenInput").value=value;
      window.alert(value);
      return value;
      }
</script>

<link href="assets/dist/css//bootstrap.min.css" rel="stylesheet">

<div class="invalid-feedback">
      Selectionnez le médecin auquel vous voulez générer un fichier XML.
    </div>

    <br>
    <br>

    <button id="editbtn" class="w-100 btn btn-lg btn-primary" name="action" value="modifier" onclick="getMedecinID()">Selectionner le médecin</button>

    <br>
    <br>
 
    <input id="hiddenInput" name="medID" type="hidden" value="13">
      </div>
    </div>
