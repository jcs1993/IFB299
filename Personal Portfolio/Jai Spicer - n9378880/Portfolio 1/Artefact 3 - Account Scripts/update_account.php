<?php
	require("../templates/header_sub.php");
	require("../db_connect.php");
	$table = "logins";
	$dbhandle = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
	$selecttable = mysql_select_db($database, $dbhandle);
	
	$account = $_SESSION['Username'];
	
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$pass = $_POST['pass'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	
	$update = "	UPDATE $table 
				SET 
				FirstName='$fname', 
				LastName='$lname', 
				Password='$pass', 
				Email='$email', 
				PhoneNumber='$phone', 
				Address='$address'
				WHERE 
				Username='$account'";
	mysql_query($update);
	mysql_close();
	header("Location:../account.php");
?>