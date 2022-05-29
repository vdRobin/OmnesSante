<?php
$connect = new PDO('mysql:host=localhost;dbname=bddsante', 'root', '');

$data = array();

if(!isset($_GET['medecinID'])||$_GET['medecinID']=="")
{
    $medecinID = 6666666;
}
else {
  $medecinID=$_GET['medecinID'];
}

$query = "SELECT * FROM events WHERE medecinID=".$medecinID." ORDER BY id";

$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

foreach($result as $row)
{
 $data[] = array(
  'id'   => $row["id"],
  'title'   => $row["title"],
  'start'   => $row["start_event"],
  'end'   => $row["end_event"]
 );
}

echo json_encode($data);
?>