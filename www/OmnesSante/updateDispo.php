<?php

//update.php

$connect = new PDO('mysql:host=localhost;dbname=bddsante', 'root', '');

if(isset($_POST["id"]))
{
 $query = "
 UPDATE disponibilites 
 SET titre=:title, heureDebut=:start_event, heureFin=:end_event 
 WHERE disponibiliteID=:id
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':title'  => $_POST['title'],
   ':start_event' => $_POST['start'],
   ':end_event' => $_POST['end'],
   ':id'   => $_POST['id']
  )
 );
}

?>