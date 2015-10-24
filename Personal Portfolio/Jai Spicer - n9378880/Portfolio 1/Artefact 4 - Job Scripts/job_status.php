<?php 
require("../db_connect.php");
require("../templates/header_sub.php"); 
$account = $_SESSION['Username'];
?>

<link rel="stylesheet" href="../css/style.css">
<title><?=$account?>'s Account </title>

<?php require("../templates/account_menu_sub.php") ?>

<?php
	$con = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
	$database = mysql_select_db($database, $con);
	$account = $_SESSION['Username'];
	$table = "logins";
	$query = "SELECT * FROM $table WHERE Username = '$account'";
	$result = mysql_query($query);
	
	//$id = mysql_result($result, 0, "ID");
	$id = '156';
	
	$job_table = "jobs";
	$job_query = "SELECT * FROM $job_table WHERE customerID = '$id'";
	$job_result = mysql_query($job_query);
	$i = 0;
	$row = mysql_num_rows($job_result);
	
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
		<tr><td><b>Time Stamp: </b></td><td>$time</td></tr><br/>
		<form action='job_details.php' method='POST'>
			<input value='$jobnumber' name='jobid' />
			<input type='submit' value='more details' />
		</form>
		<br />
		";
		
		$i++;
	}
?>
<?php require("../templates/footer.php"); ?>