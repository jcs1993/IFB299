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
<p class="information">Please update any required details and then click the Save button.</p>
	<form action="update_account.php" method="POST" autocomplete="off">
		<table>
		<tr><td>ID: </td><td><?=$id?></td></tr>
		<tr><td>Username: </td><td><?=$user?></td></tr>
		<tr><td>First Name: </td><td><input type="text" value="<?php echo $fname ?>" name="fname" /></td></tr>
		<tr><td>Last Name: </td><td><input type="text" value="<?php echo $lname ?>" name="lname" /></td></tr>
		<tr><td>Email: </td><td><input type="text" value="<?php echo $email ?>" name="email" /></td></tr>
		<tr><td>Phone Number: </td><td><input type="text" value="<?php echo $phone ?>" name="phone" /></td></tr>
		<tr><td>Address: </td><td><input type="text" value="<?php echo $address ?>" name="address" /></td></tr>
		<tr><td></td><td>
			<input type="submit" value="Save" style="width: 126px" /></td></tr>
		</table>
	</form>
	<p><a href="password.php">Change Password</a></p>
	<p><a href="../account.php">Back to Accounts Menu</a></p>
	
	

<?php require("../templates/footer.php"); ?>