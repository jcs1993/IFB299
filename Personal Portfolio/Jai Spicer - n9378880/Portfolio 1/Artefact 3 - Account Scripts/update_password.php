<?php 
	require("../templates/header_sub.php");
	require("../db_connect.php");
	$table = "logins";
	$dbhandle = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
	$selecttable = mysql_select_db($database, $dbhandle);
	
	$account = $_SESSION['Username'];
	
	$pass = $_POST['pass'];
	$retype = $_POST['retype'];
	
	if ($pass == $retype)
	{
		$update = " UPDATE $table SET Password='$pass' WHERE Username='$account'";
		mysql_query($update);
		mysql_close();
		header("Location:../logout.php");
	}
	else
	{
		echo '<p>The passwords didnt match</p>';
	}
?>