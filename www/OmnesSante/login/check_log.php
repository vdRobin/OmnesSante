<?php
require('config.php');
session_start();

if (isset($_POST["email"])) {

	$username = stripslashes($_REQUEST["email"]);
	$username = mysqli_real_escape_string($conn, $username);
	$password = stripslashes($_REQUEST["password"]);
	$password = mysqli_real_escape_string($conn, $password);
	$q = "SELECT * FROM `utilisateur` WHERE email='$username' and motDePasse='" . hash('sha256', $password) . "'";
	$result = mysqli_query($conn, $q) or die();
	$rows = mysqli_num_rows($result);



	if ($rows == 1) {
		while ($row = mysqli_fetch_assoc($result)) {
			$_SESSION['utilisateurID'] = $row['utilisateurID'];
			$_SESSION['numCarte'] = $row['numCarte'];
			$_SESSION['typeUtilisateur'] = $row['typeUtilisateur'];
			$_SESSION['nom'] = $row['nom'];
			$_SESSION['prenom'] = $row['prenom'];
			$_SESSION['specialite'] = $row['specialite'];
			$_SESSION['CV'] = $row['CV'];
			$_SESSION['ville'] = $row['ville'];
			$_SESSION['codePostal'] = $row['codePostal'];
			$_SESSION['pays'] = $row['pays'];
			$_SESSION['telephone'] = $row['telephone'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['disponibilite'] = $row['disponibilite'];
			$_SESSION['carteVitale'] = $row['carteVitale'];
			$_SESSION['photo'] = $row['photo'];
		}
		if ($_SESSION['typeUtilisateur'] == 1) {
			header("Location: ../CompteClient.php");

		} else if ($_SESSION['typeUtilisateur'] == 2) { 
			header("Location: ../CompteMedecin.php");
		} else if ($_SESSION['typeUtilisateur'] == 3) { 
			header("Location: ../CompteMedecin.php");
		}else{
			header("Location: ../index.php");
		}

	} else {
		header("Location: ../login/wrongPassword.php");
	}
	}
	?>

