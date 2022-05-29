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

$nomFichier=$_REQUEST['nom'];
$nom=$_REQUEST['nom'];
$prenom=$_REQUEST['prenom'];
$email=$_REQUEST['email'];
$tel=$_REQUEST['telephone'];
$ville=$_REQUEST['ville'];
$specialite=$_REQUEST['specialite'];
$photo=$_REQUEST['photo'];


$xml = new XMLWRITER();
$xml->openUri($nomFichier);

$xml->xmlwriter_start_document('1.0', 'utf-8');

$xml->xmlwriter_start_element('CV');
$xml->xmlwriter_start_element('Medecin');

$xml->xmlwriter_write_element('Nom', $nom);
$xml->xmlwriter_write_element('Prenom', $prenom);
$xml->xmlwriter_write_element('Email', $email);
$xml->xmlwriter_write_element('Telephone', $tel);
$xml->xmlwriter_write_element('Ville', $ville);
$xml->xmlwriter_write_element('Specialité', $specialite);
$xml->xmlwriter_write_element('Photo', $photo);

$xml->xmlwriter_end_element();
$xml->xmlwriter_end_element();

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
