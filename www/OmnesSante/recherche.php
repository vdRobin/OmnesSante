<?php
require "config.php"; //config bdd

$query1 = "SELECT * FROM `utilisateur`as user
WHERE user.nom LIKE '%$query%' OR user.prenom LIKE '%$query%' OR user.specialite LIKE '%$query%' OR user.ville LIKE '%$query%'";

$result = mysqli_query($conn, $query1) or die();
$rows = mysqli_num_rows($result);

if ($rows == 0) {
    echo "Aucun résultat...";
}
while ($row = mysqli_fetch_assoc($result)) {

    if ($row['typeUtilisateur'] != 1) {
?>
<?php require "display-1-user.php"?>
<?php
    }
}
?>
<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
