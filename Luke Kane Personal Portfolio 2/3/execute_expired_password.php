<!--
This page is called from the expired_password.php page. It checks a users password and repeat password
field match and then salts/hashes the password and stores it in the logins table. It sets the 
expired password field to 0 to allow users a successful login. If the passwords do not match it returns
to the expired_password.php file to allow the user to try again.
-->

<?php 
	require("templates/header.php");
	require("db_connect.php");
	$table = "logins";
	$dbhandle = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
	$selecttable = mysql_select_db($database, $dbhandle);
	
	$account = $_SESSION['Username'];
	
	$pass = $_POST['pass'];
	$retype = $_POST['retype'];
	
	if ($pass == $retype)
	{
		$password = password_hash($pass, PASSWORD_DEFAULT);
		$update = " UPDATE $table SET Password='$password' WHERE Username='$account'";
		$unexpirePassword = " UPDATE $table SET PasswordExpired = 0 WHERE Username='$account'";
		mysql_query($update);
		mysql_query($unexpirePassword);
		mysql_close();
		header("Location:logout.php?success=1");
	}
	else
	{
		header("Location:expired_password.php?success=0");
	}
?>