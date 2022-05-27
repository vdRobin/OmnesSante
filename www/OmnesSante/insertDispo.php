<?php

//insert.php

$connect = new PDO('mysql:host=localhost;dbname=bddsante', 'root', '');

if(isset($_POST["title"]))
{
 $query = "
 INSERT INTO disponibilites
 (titre, heureDebut, heureFin, disponibiliteID) 
 VALUES (:title, :start_event, :end_event; :id)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':title'  => $_POST['title'],
   ':start_event' => $_POST['start'],
   ':end_event' => $_POST['end'],
   ':id' => $_POST['id'],
  )
 );
}


?>