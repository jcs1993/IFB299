<?php 
require("../db_connect.php");
require("../templates/header_sub.php"); 
$account = $_SESSION['Username'];
?>

<link rel="stylesheet" href="../css/style.css">
<title><?=$account?>'s Account </title>
<h1>Account Details</h1>
<p class="information">Your account details are displayed. Click 'Edit Account' if you would like to 
update this information or change your password.</p>
<?php //commented out due to moving the functions from accounts to home page require("../templates/account_menu_sub.php") ?>

<?php
	$con = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
	$database = mysql_select_db($database, $con);
	$account = $_SESSION['Username'];
	$table = "logins";
	$query = "SELECT * FROM $table WHERE Username = '$account'";
	$result = mysql_query($query);
	$row = mysql_num_rows($result);
	$i = 0;
	
	while ($i < $row)
	{
		$firstname = mysql_result($result, $i, "FirstName"); 
		$lastname = mysql_result($result, $i, "LastName");
		$username = mysql_result($result, $i, "Username");
		$email = mysql_result($result, $i, "email");
		$phone = mysql_result($result, $i, "PhoneNumber");
		$address = mysql_result($result, $i, "Address");
		
		echo 
		"
		<tr><td><b>First Name: </b></td><td>$firstname</td></tr><br/>
		<tr><td><b>Last Name: </b></td><td>$lastname</td></tr><br/>
		<tr><td><b>Username: </b></td><td>$username</td></tr><br/>
		<tr><td><b>Email: </b></td><td>$email</td></tr><br/>
		<tr><td><b>Phone: </b></td><td>$phone</td></tr><br/>
		<tr><td><b>Address: </b></td><td>$address</td></tr><br/>
		";
		
		$i++;
	}
?>

	<form action="edit.php">
		<input type="submit" value="Edit Account">
	</form>

<?php require("../templates/footer.php"); ?>