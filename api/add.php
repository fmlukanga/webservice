<?php
	require_once "../db_config.php";


	$post = file_get_contents('php://input');
	$post = json_decode($post);

	$sql = "INSERT INTO posts (title,fname,lname,phone,email,district,position) VALUES ('".$post->title."','".$post->fname."','".$post->lname."','".$post->phone."','".$post->email."','".$post->district."','".$post->position."')";
	$result = $mysqli->query($sql);

	$sql = "SELECT * FROM posts Order by id desc LIMIT 1"; 
	$result = $mysqli->query($sql);
	$data = $result->fetch_assoc();
	
	echo json_encode($data);
?>

