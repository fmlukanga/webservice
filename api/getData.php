<?php
require_once "../db_config.php";


$sql = "SELECT * FROM posts"; 
$result = $mysqli->query($sql);

while($row = $result->fetch_assoc()){
     $json[] = $row;
}

$data['data'] = $json;
$result =  mysqli_query($mysqli,$sql);
echo json_encode($data);
?>

