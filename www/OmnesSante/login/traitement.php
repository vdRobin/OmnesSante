<?php

//connecter l'utilisateur dans BDD
$db_handle = mysqli_connect('localhost','root','');
$db_found = mysqli_select_db($db_handle,"bddsante");
if($db_found){
	
	echo "Database found";

	}
}
else
{
	echo "Database not found";
}

mysqli_close($db_handle);

?>