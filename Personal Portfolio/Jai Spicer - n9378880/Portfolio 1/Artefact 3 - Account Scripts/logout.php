<?php session_start();
	$_SESSION['logged_in'] = false;
	$_SESSION['Username'] = " ";
	$_SESSION['user_type'] = " ";
	header("Location:home.php");
?>