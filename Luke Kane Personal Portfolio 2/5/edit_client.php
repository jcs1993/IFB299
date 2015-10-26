<!--
This page is for displaying customer info in editable text boxes so it can be updated.-->


<?php require("../templates/header_sub.php"); ?>

<title>Customer Data - Search Results</title>
<link rel="stylesheet" href="../css/style.css">

<?php
	$rows = 0;
	if (isset($_POST['client_id'])) {
	
	    //Connection to MySQL
		$username = "root";
		$password = "team5";
		$hostname = "localhost";
		$database = "ifb299db";
		$table = "logins";
	
		$dbhandle = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
		$selecttable = mysql_select_db($database, $dbhandle);
	
		$userID = mysql_real_escape_string($_POST['client_id']);
		$query = "SELECT * FROM $table WHERE ID = '$userID'";
		$result = mysql_query($query);
		$rows = mysql_num_rows($result);
		
		if ($rows > 0){
			$FirstName = mysql_result($result, 0, "FirstName");
			$LastName = mysql_result($result, 0, "LastName");
			$Username = mysql_result($result, 0, "Username");
			$Email = mysql_result($result, 0, "Email");
			$PhoneNumber = mysql_result($result, 0, "PhoneNumber");
			$Address = mysql_result($result, 0, "Address");
			$Suburb = mysql_result($result, 0, "Suburb");
			$Postcode = mysql_result($result, 0, "Postcode");
		}
	
		mysql_close();
	}

?>

<h1>Customer Management</h1>
<h2>Update Existing Customer</h2>
<hr><hr>
<p class="information">Please change the required information and press the 'Update Record' button.</p>

<em class="successful"><?php
	if (isset($_GET["success"])) {
		$success = $_GET['success'];
			if ($success == "1") {
				echo ("Record Updated Successfully!");
			}
	}  ?></em>
<em class="unsuccessful"><?php
	if (isset($_GET["success"])) {
		$success = $_GET['success'];
			if ($success == "0") {
				echo ("Error! Unsuccessful, Please try again!");
			}
	} ?></em>

<form action="modify_execute.php?record=<?php echo $userID?>" method="post" autocomplete="off">
	<table <?php if($rows == 0) echo 'hidden="hidden"'?> >
	<?php if($rows == 0 && !isset($_GET["success"])) echo '<em class="unsuccessful">Error! no records found, please check the record number and try again.</em>';?>
		<tr>
			<td>User Name:</td>
			<td>
			<input name="Username" required="" type="text" value="<?php echo $Username ?>" disabled="disabled" /></td>
		</tr>

		<tr>
			<td>First Name:</td>
			<td>
			<input name="FirstName" required="" type="text" value="<?php echo $FirstName ?>" /></td>
		</tr>
		<tr>
			<td>Last Name:</td>
			<td>
			<input name="LastName" required="" type="text" value="<?php echo $LastName ?>" /></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td>
			<input name="Email" required="" type="text" value="<?php echo $Email ?>" /></td>
		</tr>
		<tr>
			<td>Phone Number:</td>
			<td>
			<input maxlength="10" name="PhoneNumber" required="" type="text" value="<?php echo $PhoneNumber ?>" /></td>
		</tr>
		<tr>
			<td>Address:</td>
			<td>
			<input name="Address" required="" type="text" value="<?php echo $Address ?>" /></td>
		</tr>
		<tr>
			<td>Suburb:</td>
			<td>
			<input name="Suburb" required="" type="text" value="<?php echo $Suburb ?>" /></td>
		</tr>
		<tr>
			<td>Postcode:</td>
			<td>
			<input maxlength="4" name="Postcode" type="text" value="<?php echo $Postcode ?>" required="required" /></td>
		</tr>
		<tr>
			<td></td>
			<td><input name="updateButton" type="submit" value="Update Record" /></td>
		</tr>
	</table>
</form>
<hr>
<p><a href="../customer.php">Return to Customer Management</a></p>

<?php require("../templates/footer.php"); ?>
