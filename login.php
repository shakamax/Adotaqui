<?php 
	
	session_start();
	$_SESSION['login'] = true;

	header("Location: home.php");
	
 ?>