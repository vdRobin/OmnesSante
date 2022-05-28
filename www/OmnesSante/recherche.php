
<?php
require "config.php"; //config bdd

$query1 = "SELECT * FROM `utilisateur`as user
WHERE user.nom LIKE '%$query%' OR user.prenom LIKE '%$query%' OR user.specialite LIKE '%$query%'";

$result = mysqli_query($conn, $query1) or die();
$rows = mysqli_num_rows($result);

echo "Il y a $rows résultat(s)<br><br>";



while ($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row['utilisateurID'] . '<br>';
    echo "nom: " . $row['nom'] . '<br>';
    echo "prenom: " . $row['prenom'] . '<br>';
    echo "specialite: " . $row['specialite'] . '<br><br>';
}
?>

