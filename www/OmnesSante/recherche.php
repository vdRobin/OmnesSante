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