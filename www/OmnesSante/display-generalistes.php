<?php
require "config.php";
$query1 = "SELECT * FROM `utilisateur`as user WHERE user.specialite='Generaliste'";
$result = mysqli_query($conn, $query1) or die();
$rows = mysqli_num_rows($result);

if ($rows == 0) {
  echo "Aucun résultat..."; // si il n'a pas de résultats, on l'affiche 
}
else{
  echo "Il y a $rows médecins(s) affiliés<br><br>";
}
while ($row = mysqli_fetch_assoc($result)) {
    if ($row['typeUtilisateur'] != 1) {
?>


                    <p>
                        <?php
                        require "display-1-user.php"
                        ?>
                    </p>
<br><br>
<?php
    }
}
?>