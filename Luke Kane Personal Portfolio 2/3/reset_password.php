<!--
Page for resetting users passwords to a random number. When a password is reset a field in the
logins table is set to 1 to represent the password being expired.
-->
<head>
<meta content="en-au" http-equiv="Content-Language">
</head>

<?php 
	require("../templates/header_sub.php");
	require("../db_connect.php");
	
	$dbhandle = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
	$selecttable = mysql_select_db($database, $dbhandle);

	$userid = $_POST['user'];
	$pass = rand(1000000, 9999999);
		
	$newpassword = password_hash($pass, PASSWORD_DEFAULT);
	$update = " UPDATE $table SET Password='$newpassword' WHERE Username='$userid'";
	$expirepass = " UPDATE $table SET PasswordExpired=1 WHERE Username='$userid'";
	mysql_query($update);
	mysql_query($expirepass);
	mysql_close();
?>
<h1>Password Reset</h1>
<hr><hr>
<?php
echo "<p class='successful'> The account with username '".$userid."' has had its password reset to '".$pass."'. Please advise the user that they will need to select a password at the next logon.</p>";
?>
<hr />
<p><a href="../home.php">Back to Home</a></p>
