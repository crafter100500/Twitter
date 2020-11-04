<?php  
	$connect2 = mysqli_connect("127.0.0.1", "root", "", "Twitter");

	$ins2 = "INSERT INTO followings (name, channel, img2) VALUES ('".$_GET['name']."', '".$_GET['channel']."', '".$_GET['img2']."')";
	mysqli_query($connect2, $ins2);
	header('Location: index.php');
?>