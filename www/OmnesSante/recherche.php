<?php
require "config.php"; //config bdd

$query1 = "SELECT * FROM `utilisateur`as user
WHERE user.nom LIKE '%$query%' OR user.prenom LIKE '%$query%' OR user.specialite LIKE '%$query%' OR user.ville LIKE '%$query%'";

$result = mysqli_query($conn, $query1) or die();
$rows = mysqli_num_rows($result);

// echo "Il y a $rows résultat(s)<br><br>"; //affiche le nombre de résultat, mais comme on n'affiche pas les patient le résultat peut etre faux

if ($rows==0) {
    echo "Aucun résultat..."; // si il n'a pas de résultats, on l'affiche 
}
while ($row = mysqli_fetch_assoc($result)) {

    if ($row['typeUtilisateur'] != 1) {
?>

        <div class="card bg-primary text-white droite">
            <figure class="card-body">
                <blockquote class="blockquote">

                    <p>
                        <?php
                        echo '<img src="image/docteur1.png" alt="icon" height="60" width="60"/>';
                        // echo "<img src=' .  $row['photo']  . ".jpg'/>";
                        if ($row['typeUtilisateur'] == 2) {
                            echo "  Médecin - ". $row['specialite'] . '<br>';
                        }
                        if ($row['typeUtilisateur'] == 3) {
                            echo "  Administrateur" . '<br>';
                        }
                        echo "Nom : " . $row['nom'] . '<br>';
                        echo "Prenom : " . $row['prenom']. '<br>' ;
                        echo "Ville : " . $row['ville'] ;
                        ?>
                    </p
                </blockquote>
            </figure>
        </div><br><br>
<?php


    }
}
?>