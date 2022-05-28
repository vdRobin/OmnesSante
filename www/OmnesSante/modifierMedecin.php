<?php
require('config.php');

if($_POST['action'] == 'modifier')
{
	echo "On modifie le médecin";
	$ID = stripslashes($_REQUEST['medID']);
	echo $ID;
}elseif ($_POST['action']=='supprimer') {
	echo "On supprime le médecin";
	$ID = stripslashes($_REQUEST['medID']);
	echo $ID;
	$query1="DELETE FROM `utilisateur` WHERE utilisateurID=$ID";
	mysqli_query($conn, $query1);


} else {
	echo "Pas de bouton selectionné";
}

?>