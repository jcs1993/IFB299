<?php 
	require("../db_connect.php");
	require("../templates/header_sub.php"); 
	
	$user = $_POST['user'];
	$set = $_POST['set'];
	
	$con = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
	$database = mysql_select_db($database, $con);
	$table = "logins";
	
	$update = "	UPDATE $table 
				SET 
				Approved='$set'
				WHERE 
				Username='$user'";
	mysql_query($update);
	mysql_close();
	
	header("location:volunteers.php");
?>
