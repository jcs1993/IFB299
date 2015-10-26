<!--
This page is used to make a user change their password when it has been set as expired. This page
obtains the users new password and passes it to execute_expired_password.php for processing.
This page may be returned to if the password change is not successful.
-->
<?php 
require("templates/header.php"); 
require("db_connect.php");
$account = $_SESSION['Username'];
?>
	<h1>Change Password</h1>
<p class="importantInformation">Your password has expired! Please select a new password.</p>
	
	<em class="unsuccessful"><?php
	if (isset($_GET["success"])) {
		$success = $_GET['success'];
			if ($success == "0") {
				echo ("Error, The passwords did not match. Please try again!");
			}
	} ?></em>

	<link rel="stylesheet" href="../css/style.css">
	<title>Migrant Helpdesk - Expired Password</title>

	<form action="execute_expired_password.php" method="POST" autocomplete="off">
	<table>
		<tr><td>Password: </td><td><input type="password" placeholder="Password" name="pass" /></td></tr>
		<tr><td>Re-Type: </td><td><input type="password" placeholder="Password" name="retype" /></td></tr>
		<tr><td></td><td>
			<input type="submit" value="Update"/></td></tr>
	</table>
	</form>
<?php require("templates/footer.php"); ?>