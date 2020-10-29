<?php
require '../db_config.php';

$id  = $_GET["id"];

$post = file_get_contents('php://input');
$post = json_decode($post);
$sql = "UPDATE posts SET title = '".$post->title."', fname = '".$post->fname."', lname = '".$post->lname."', phone = '".$post->phone."', email = '".$post->email."', district = '".$post->district."', position = '".$post->position."' WHERE id = '".$id."'";
$result = $mysqli->query($sql);

$sql = "SELECT * FROM posts WHERE id = '".$id."'"; 
$result = $mysqli->query($sql);
$data = $result->fetch_assoc();

echo json_encode($data);
?>