<!--
This page stores the queries for searching the client tables and executes the query
depending on the selection of the /customer/search.php page.
-->

<?php 
require("../db_connect.php");
require("../templates/header_sub.php"); 
$account = $_SESSION['Username'];
?>
<link rel="stylesheet" href="../css/style.css">
<title>Client Search - Results</title>

<?php
	$dbhandle = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
	$selecttable = mysql_select_db($database, $dbhandle);
	$table = "logins";
	
	$selected_search = $_POST['radioGroup1'];
	$search_terms = mysql_real_escape_string($_POST['search_box']);
	if ($selected_search == "lastName"){
		$query = "SELECT * from logins WHERE LastName = '$search_terms' AND UserLevel = 'Migrant'";
	}
	
	if ($selected_search == "phoneNumber"){
		$query = "SELECT * from logins WHERE PhoneNumber = '$search_terms' AND UserLevel = 'Migrant'";
	
	}
	
	if ($selected_search == "clientNumber"){
		$query = "SELECT * from logins WHERE ID = '$search_terms' AND UserLevel = 'Migrant'";

	}
		
	$result = mysql_query($query);
	
	$i = 0;
	$row = mysql_num_rows($result);
	
	echo "<h1>Customer Management</h1>";
	echo "<h2>Search Results for '".$search_terms."'</h2>";
	echo "<hr /><hr />";
	if ($row > 0){
	echo "<p class='successful'>".$row." Matches Found</p>";
	} else {
	echo "<p class='unsuccessful'>No Matches Found</p>";
	}
	while ($i < $row)
	{
		$ID = mysql_result($result, $i, "ID");
		$clientFirstName = mysql_result($result, $i, "FirstName");
		$clientLastName = mysql_result($result, $i, "LastName");
		$username = mysql_result($result, $i, "Username");
		$email = mysql_result($result, $i, "Email");
		$clientPhoneNumber = mysql_result($result, $i, "PhoneNumber");
		$address = mysql_result($result, $i, "Address");
		$accountActive = mysql_result($result, $i, "Approved");
		
		if ($accountActive == 1) {
			$accountActive = "Yes";
		}
		else {
			$accountActive = "No";
		}
		
		echo 
		"
		<form action='edit_client.php' method='POST'>
		<tr><td><b>Customer ID: </b></td><td>$ID</td></tr><br/>
		<tr><td><b>First Name: </b></td><td>$clientFirstName</td></tr><br/>
		<tr><td><b>Last Name: </b></td><td>$clientLastName</td></tr><br/>
		<tr><td><b>Username: </b></td><td>$username</td></tr><br/>
		<tr><td><b>Email: </b></td><td>$email</td></tr><br/>
		<tr><td><b>Phone: </b></td><td>$clientPhoneNumber</td></tr><br/>
		<tr><td><b>Address: </b></td><td>$address</td></tr><br/>
		<tr><td><b>Account Active: </b></td><td>$accountActive</td></tr><br/>
		<tr><td><input value='$ID' name='client_id' type='hidden' /></td>
		<td><input type='submit' value='Update Information' /></td></tr>
		</form>
		
		<form action='../account/reset_password.php' method='POST'>
			<input type='hidden' name='user' value='$username'>
			<input type='submit' value='Reset Password' />
		</form>
		<br />
		";
		
		$i++;
	}
	echo "<hr />";
	echo "<p><a href='../customer.php'>Back to Customer Management</a></p>";
	
?>

<?php require("../templates/footer.php");?>