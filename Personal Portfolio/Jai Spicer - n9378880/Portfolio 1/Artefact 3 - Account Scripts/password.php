<?php 
require("../templates/header_sub.php"); 
require("../db_connect.php");
$account = $_SESSION['Username'];
?>
	<link rel="stylesheet" href="../css/style.css">
	<title>Update <?=$account?>'s Password</title>

	<form action="update_password.php" method="POST">
		<p>Password: </p><input type="password" placeholder="Password" name="pass" />
		<p>Re-Type: </p><input type="password" placeholder="Password" name="retype" />
		<br />
		<input type="submit" value="Update" />
	</form>

<?php require("../templates/footer.php"); ?>