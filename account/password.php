<?php 
require("../templates/header_sub.php"); 
require("../db_connect.php");
$account = $_SESSION['Username'];
?>
	<h1>Change Password</h1>
<p class="information">Please enter your new password and click the update button to save the 
changes.</p>
	
	<em class="unsuccessful"><?php
	if (isset($_GET["success"])) {
		$success = $_GET['success'];
			if ($success == "0") {
				echo ("Error, The passwords did not match. Please try again!");
			}
	} ?></em>

	<link rel="stylesheet" href="../css/style.css">
	<title>Update <?=$account?>'s Password</title>

	<form action="update_password.php" method="POST" autocomplete="off">
	<table>
		<tr><td>Password: </td><td><input type="password" placeholder="Password" name="pass" /></td></tr>
		<tr><td>Re-Type: </td><td><input type="password" placeholder="Password" name="retype" /></td></tr>
		<tr><td></td><td>
			<input type="submit" value="Update" style="width: 126px" /></td></tr>
	</table>
	</form>
<p><a href="../account.php">Back to Accounts Menu</a></p>

<?php require("../templates/footer.php"); ?>