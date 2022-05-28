<?php

if($_POST['action'] == 'modifier')
{
	echo "On modifie le médecin";

}elseif ($_POST['action']=='supprimer') {
	echo "On supprime le médecin";
} else {
	echo "Pas de bouton selectionné";
}

?>