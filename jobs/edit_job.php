<?php 
	require("../db_connect.php");
	require("../templates/header_sub.php"); 
	$account = $_SESSION['Username'];
?>
	<title>Edit Job</title>

<?php //commented out as not located in the accounts menu anymore require("../templates/account_menu_sub.php") ?>

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
<h1>Edit Job Details</h1>
<p class="information">Update any required information and then click Save.</p>
	<form action="update_job.php" method="POST">
		<table>
		<tr>
		<td>Job Number: </td><td><?=$jobnumber?></td>
		</tr>
		<tr>
		<td>Contractor ID:</td><td><?=$contid?></td>
		</tr>
		<tr>
		<td>Customer ID:<td><?=$custid?></td>
		</tr>
		<tr>
		<td>Job Description:</td><td><input type="text" value="<?php echo $jobdesc ?>" name="jobdesc" /></td>
		</tr>
			<tr>
		<td>Job Type:</td>
		<td><select name="jobtype">
		<option <?php if ($jobtype == "Building") echo 'selected'; ?>>Building</option>
		<option <?php if ($jobtype == "Plumbing") echo 'selected'; ?>>Plumbing</option>
		<option <?php if ($jobtype == "Electrical") echo 'selected'; ?>>Electrical</option>
		<option <?php if ($jobtype == "Landscaping") echo 'selected'; ?>>Landscaping</option>
		<option <?php if ($jobtype == "Other") echo 'selected'; ?>>Other</option>
		</select></td>
		</tr>

		<tr>
		<td>Job Status:</td>
		<td><select name="jobstat">
		<option <?php if ($jobstat == "Open") echo 'selected'; ?> value="Open">Open</option>
		<option <?php if ($jobstat == "In Progress") echo 'selected'; ?> value="In Progress">In Progress</option>
		<option <?php if ($jobstat == "Closed") echo 'selected'; ?> value="Closed">Closed</option>

		</select></td>
		</tr>

		<tr>
		<td>Notes:</td><td><textarea name="notes"><?php echo $notes ?></textarea>
		</tr>
		<tr>
		<td><input type="hidden" value="<?php echo $jobnumber ?>" name="jobnumber" /></td>
		<td><input type="submit" value="Save" /></td>
		</tr>
		</table>
	</form>
	<p><a href="job_home.php">Cancel Changes</a></p>

<?php require("../templates/footer.php"); ?>