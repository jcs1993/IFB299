<?php 
require("../db_connect.php");
require("../templates/header_sub.php"); 
$account = $_SESSION['Username'];
?>
<link rel="stylesheet" href="../css/style.css">
<title><?=$account?>'s Account </title>

<?php require("../templates/account_menu_sub.php") ?>

<?php
	$dbhandle = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
	$selecttable = mysql_select_db($database, $dbhandle);
	$table = "jobs";

	$search = $_POST['id_search'];
	
	$query = "SELECT * FROM $table WHERE jobNumber = '$search'";
	$result = mysql_query($query);
	
	$i = 0;
	$row = mysql_num_rows($result);
	
	while ($i < $row)
	{
		$jobnumber = mysql_result($result, $i, "jobNumber"); 
		$contid = mysql_result($result, $i, "contractorID");
		$custid = mysql_result($result, $i, "customerID");
		$jobdesc = mysql_result($result, $i, "jobDescription");
		$jobtype = mysql_result($result, $i, "jobType");
		$jobstat = mysql_result($result, $i, "jobStatus");
		$time = mysql_result($result, $i, "lastUpdateDateTime");
		$notes = mysql_result($result, $i, "progressNotes");
		
		echo 
		"
		<tr><td><b>Job Number: </b></td><td>$jobnumber</td></tr><br/>
		<tr><td><b>Contractor ID: </b></td><td>$contid</td></tr><br/>
		<tr><td><b>Customer ID: </b></td><td>$custid</td></tr><br/>
		<tr><td><b>Job Description: </b></td><td>$jobdesc</td></tr><br/>
		<tr><td><b>Job Type: </b></td><td>$jobtype</td></tr><br/>
		<tr><td><b>Job Status: </b></td><td>$jobstat</td></tr><br/>
		<tr><td><b>Time Stamp: </b></td><td>$time</td></tr><br/>
		<tr><td><b>Notes: </b></td><td>$notes</td></tr><br/>
		<form action='edit_job.php' method='POST'>
			<input type='hidden' value='$jobnumber' name='jobid' />
			<input type='submit' value='Edit Details' />
		</form>
		";
		
		$i++;
	}
	
?>

<?php require("../templates/footer.php");