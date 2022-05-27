// Fonctions Globales Utiles pour la gestion des base de données
<?php
function connectMaBase(){
    $base = mysql_connect ('localhost', 'root', '');  
    mysql_select_db ('MaBase', $base) ;
}
?>