<?php

//connecter l'utilisateur dans BDD
$db_handle = mysqli_connect('localhost','root','');
$db_found = mysqli_select_db($db_handle,"bddsante");

$Email= isset($_POST["floatingEmail"])?$_POST["floatingEmail"]:"";
$Password= isset($_POST["floatingPassword"])?$_POST["floatingPassword"]:"";



if($db_found){

	$sql = "SELECT * FROM utilisateur WHERE email='.$Email.' AND motDePasse= '.$Password.'";
	mysqli_query($db_handle,$sql);

	if($data==null)
	{
		echo "Wrong Password";
	}

	while($data = mysqli_fetch_assoc($result)){
	echo "Login:".$data['floatingEmail'].'<br>';
	echo "Password:".$data['floatingPassword'].'<br>';

	}
}
else
{
	echo "Database not found";
}

mysqli_close($db_handle);

?>