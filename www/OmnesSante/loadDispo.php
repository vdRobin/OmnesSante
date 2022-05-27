<?php

//load.php

$connect = new PDO('mysql:host=localhost;dbname=bddsante', 'root', '');

$data = array();

$query = "SELECT * FROM disponibilites ORDER BY disponibiliteID";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
 $data[] = array(
  'id'   => $row["disponibiliteID"],
  'title'   => $row["titre"],
  'start'   => $row["heureDebut"],
  'end'   => $row["heureFin"]
 );
}

echo json_encode($data);

?>