	<?php
	    $username = "root";
        $password = "team5";
        $hostname = "localhost";
        $database = "ifb299db";
        $table = "logins";

        $dbhandle = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
        $selecttable = mysql_select_db($database, $dbhandle);
		
		
		
		

require("../templates/header_sub.php"); ?>

<title>System Management - Alter User Access</title>


	<h1>System Management</h1>
	<h2>Alter User Access Level</h2>
	<hr /><hr />
	<p class="information">Please enter a username and select the required access level.</p>
	
	<em class="unsuccessful"><?php
		if (isset($_GET["success"])) {
		$success = $_GET['success'];
			if ($success == "0") {
				echo ("Error, Please check the username and try again!");
			}
	} ?></em>
	<em class="successful"><?php
	if (isset($_GET["success"])) {
		$success = $_GET['success'];
			if ($success == "1") {
				echo ("Access level successfully changed.");
			}
	} ?></em>

	
	<?php
		
		if (isset($_POST['form_user'])){
			$accessLevel = $_POST['form_access'];
			$userID = $_POST['form_user'];
			$update = "UPDATE $table SET UserLevel = '$accessLevel' WHERE Username = '$userID'";
			$verify = "SELECT * FROM $table WHERE Username = '$userID' AND UserLevel = '$accessLevel'";
			mysql_query($update);
			$result = mysql_query($verify);
			$row = mysql_num_rows($result);
			mysql_close();
			
			if ($row == 1){
			header("location:upgrade.php?success=1");
			} else if ($row == 0){
			header("location:upgrade.php?success=0");
			}
		}
	?>
	
	
	<form method="post" action="upgrade.php">
	<table>
	<tr><td>Enter Username:</td><td><input name="form_user" type="text" required></td></tr>
	<tr><td>Select Access Level:</td><td><select name="form_access" required>
		<option>Migrant</option>
		<option>Volunteer</option>
		<option>Manager</option>
		<option>Admin</option>
		</select></td></tr>
	<tr><td></td><td>
		<input name="submitButton" type="submit" value="Submit Changes" /></td></tr>
	</table>
	</form>
	
	<hr />
	<p><a href="../home.php">Back to Home</a></p>
	
<?php require("../templates/footer.php"); ?>
