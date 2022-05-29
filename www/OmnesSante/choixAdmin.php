<?php

if($_POST['action'] == 'labo')
{
	echo "Modifier les informations du laboratoire";
	header("Location: modification_labo.php");
}elseif ($_POST['action']=='medecin') {
	echo "Modifier et supprimer les médecins";
	header("Location: afficherMedecins.php");
}elseif ($_POST['action']=='dispo') {
	echo "Modifier les disponibilités des médecins";
	header("Location: slct_medecin.php");
}elseif ($_POST['action']=='ajouter') {

	echo "Ajouter un médecin";
	header("Location: formulaireMedecin.php");
}elseif ($_POST['action']=='xml') {
	echo "Créer un fichier XML pour un médecin";
	header("Location: xml_generation.php");
}else {
	echo "Pas de bouton selectionné";
}

?>