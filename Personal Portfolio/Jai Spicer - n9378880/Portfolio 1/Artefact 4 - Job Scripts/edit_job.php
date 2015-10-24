<?php 
	require("../db_connect.php");
	require("../templates/header_sub.php"); 
	$account = $_SESSION['Username'];
?>
	<link rel="stylesheet" href="../css/style.css">
	<title><?=$account?>'s Account </title>

<?php require("../templates/account_menu_sub.php") ?>

<?php
	$id = $_POST['jobid'];
	$con = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
	$database = mysql_select_db($database, $con);
	$table = "jobs";
	$query = "SELECT * FROM $table WHERE jobNumber = '$id'";
	$job_result = mysql_query($query);
	$i = 0;
	
	$jobnumber = mysql_result($job_result, $i, "jobNumber"); 
	$contid = mysql_result($job_result, $i, "contractorID");
	$custid = mysql_result($job_result, $i, "customerID");
	$jobdesc = mysql_result($job_result, $i, "jobDescription");
	$jobtype = mysql_result($job_result, $i, "jobType");
	$jobstat = mysql_result($job_result, $i, "jobStatus");
	$time = mysql_result($job_result, $i, "lastUpdateDateTime");
	$notes = mysql_result($job_result, $i, "progressNotes");
?>
<h1>Edit Account</h1>
	<form action="update_job.php" method="POST">
		<p>Job Number: <?=$jobnumber?></p><input type="text" value="<?php echo $jobnumber ?>" name="jobnumber" />
		<p>Contractor ID: <?=$contid?></p>
		<p>Customer ID: <?=$custid?></p>
		<p>Job Description:</p><input type="text" value="<?php echo $jobdesc ?>" name="jobdesc" />
		<p>Job Type:</p><input type="text" value="<?php echo $jobtype ?>" name="jobtype" />
		<p>Job Status:</p><input type="text" value="<?php echo $jobstat ?>" name="jobstat" />
		<p>Notes:</p><input type="text" value="<?php echo $notes ?>" name="notes" />
		<br />
		<input type="submit" value="Save" />
	</form>
	<form action="job.php">
		<input type="submit" value="Cancel">
	</form>

<?php require("../templates/footer.php"); ?>