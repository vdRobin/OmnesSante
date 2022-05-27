<link href="../testlogin/assets/dist/css/bootstrap.min.css" rel="stylesheet">

<?php
require('config.php');
session_start();
echo "chui la avant isset";
if (isset($_POST["email"])){
	$username = stripslashes($_REQUEST["email"]);
	$username = mysqli_real_escape_string($conn, $username);
	$password = stripslashes($_REQUEST["password"]);
	$password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM `utilisateur` WHERE email='$username' and motDePasse='".hash('sha256', $password)."'";
	$result = mysqli_query($conn,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
	if($rows==1){
	
	    $_SESSION['email']=$username;
        $_SESSION['password']=$password;
        echo "chui la ds le if";
        header("Location: ../index.html");
	}else{
		$message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
        echo $message;
	}
}
?>