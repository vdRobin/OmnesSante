
<?php
require "config.php"; //config bdd
echo $query;

$query1 = "SELECT * FROM `utilsateur`as user 'labratoire' as labo 
WHERE user.nom LIKE '%$query%' OR user.prenom LIKE '%$query%' OR user.specialite LIKE '%$query%' OR labo.nom LIKE '%$query%'";

$res = mysqli_query($conn, $query1);
echo $query1;
echo $res;

// while ($row = mysqli_fetch_assoc($res)) {
//     echo "ID: " . $row['utilisateurID'] . '<br>';
//     echo "nom: " . $row['nom'] . '<br>';
//     echo "prenom: " . $row['prenom'] . '<br>';
//     echo "specialite: " . $row['specialite'] . '<br><br>';
// }

//  affichage résultats
// if (count($res) > 0) {
//     foreach ($res as $r) {
//         echo '<script type ="text/JavaScript">';
//         echo 'alert(" enter in recherche ")';
//         echo '</script>';

//         printf("<div>%s - %s</div>", $r["user.nom"], $r["user.prenom"], $r["email"]);
//     }
// } else {
//     echo "No results found";
// }




?>