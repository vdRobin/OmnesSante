<?php

if($_POST['action'] == 'labo')
{
	echo "Modifier les informations du laboratoire";
}elseif ($_POST['action']=='medecin') {
	echo "Modifier et supprimer les médecins";
	header("Location: afficherMedecins.php");
}elseif ($_POST['action']=='dispo') {
	echo "Modifier les disponibilités des médecins";
}elseif ($_POST['action']=='ajouter') {

	echo "Ajouter un médecin";
	header("Location: formulaireMedecin.php");
}else {
	echo "Pas de bouton selectionné";
}

?>