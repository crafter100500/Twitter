<?php  
	$connect = mysqli_connect("127.0.0.1", "root", "", "Twitter");

	$ins = "INSERT INTO tweets (author, text) VALUES ('".$_GET['author']."', '".$_GET['posts']."')";
	mysqli_query($connect, $ins);
	header('Location: index.php');
?>