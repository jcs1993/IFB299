<?php 
require("../db_connect.php");
require("../templates/header_sub.php"); 
$account = $_SESSION['Username'];
?>

<link rel="stylesheet" href="../css/style.css">
<title><?=$account?>'s Account </title>

<?php //commented out due to moving the functions from accounts to home page require("../templates/account_menu_sub.php") ?>

<?php
	$con = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
	$database = mysql_select_db($database, $con);
	$account = $_SESSION['Username'];
	$table = "logins";
	$query = "SELECT * FROM $table WHERE Username = '$account'";
	$result = mysql_query($query);
	
	
	$id = mysql_result($result, 0, "ID");
	
	$job_table = "jobs";
	$job_query = "SELECT * FROM $job_table WHERE customerID = '$id'";
	$job_result = mysql_query($job_query);
	$i = 0;
	$row = mysql_num_rows($job_result);
	echo "<h1>My Jobs</h1>";
	echo "<h2>Current Jobs - Status</h2>";
	echo "<hr /><hr />";
	echo "<p class=information>This page contains an overview of all your current active jobs.</p>";
	while ($i < $row)
	{
		$jobnumber = mysql_result($job_result, $i, "jobNumber"); 
		$jobdesc = mysql_result($job_result, $i, "jobDescription");
		$jobstat = mysql_result($job_result, $i, "jobStatus");
		$time = mysql_result($job_result, $i, "lastUpdateDateTime");
		echo 
		"
		<tr><td><b>Job Number: </b></td><td>$jobnumber</td></tr><br/>
		<tr><td><b>Job Description: </b></td><td>$jobdesc</td></tr><br/>
		<tr><td><b>Job Status: </b></td><td>$jobstat</td></tr><br/>
		<tr><td><b>Last Update: </b></td><td>$time</td></tr><br/>
		<form action='job_details.php' method='POST'>
			<input value='$jobnumber' name='jobid' type='hidden'/>
			<input type='submit' value='more details' />
		</form>
		<br />
		";
		
		$i++;
	}
	echo "<hr />";
	echo "<p><a href='../home.php'>Return Home</a></p>"
?>
<?php require("../templates/footer.php"); ?>
