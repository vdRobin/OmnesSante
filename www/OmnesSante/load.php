<?php

//load.php

$connect = new PDO('mysql:host=localhost;dbname=bddsante', 'root', '');

$data = array();

if(isset($_POST['IDvalue']))
{
  $ID=$_POST['IDvalue'];
    echo '<script languag="javascript">alert("On charge les dispos du médecin");</script>';
}


$query = "SELECT * FROM events ORDER BY id";

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