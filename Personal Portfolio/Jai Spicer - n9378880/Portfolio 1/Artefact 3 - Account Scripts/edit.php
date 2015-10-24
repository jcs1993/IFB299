<?php 
require("../templates/header_sub.php"); 
require("../db_connect.php");
$account = $_SESSION['Username'];
?> 
	<link rel="stylesheet" href="../css/style.css">
	<title>Edit <?=$account?>'s Account </title>

<?php
	$dbhandle = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
	$selecttable = mysql_select_db($database, $dbhandle);
	$table = "logins";
	$account = $_SESSION['Username'];

	$query = "SELECT * FROM $table WHERE Username = '$account'";
	$result = mysql_query($query);
	$fname = mysql_result($result, 0, "FirstName");
	$lname = mysql_result($result, 0, "LastName");
	$user = mysql_result($result, 0, "Username");
	$email = mysql_result($result, 0, "Email");
	$phone = mysql_result($result, 0, "PhoneNumber");
	$address = mysql_result($result, 0, "Address");
	$id = mysql_result($result, 0, "ID");

?>
	<h1>Edit Account</h1>
	<form action="update_account.php" method="POST">
		<p>ID: <?=$id?></p>
		<p>Username: <?=$user?></p>
		<p>First Name:</p><input type="text" value="<?php echo $fname ?>" name="fname" />
		<p>Last Name:</p><input type="text" value="<?php echo $lname ?>" name="lname" />
		<p>Email:</p><input type="text" value="<?php echo $email ?>" name="email" />
		<p>Phone Number:</p><input type="text" value="<?php echo $phone ?>" name="phone" />
		<p>Address:</p><input type="text" value="<?php echo $address ?>" name="address" />
		<br />
		<input type="submit" value="Save" />
	</form>
	<form action="../account.php">
		<input type="submit" value="Cancel">
	</form>
	<form action="password.php">
		<input type="submit" value="Change Password">
	</form>

<?php require("../templates/footer.php"); ?>