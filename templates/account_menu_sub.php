<?php  
$accounttype = $_SESSION['user_type'];
?>

<?php if($_SESSION['user_type'] == 'Admin'){ ?>

	<div>
		<ul>
			<li><a href="manager.php">Managers</a></li>
			<li><a href="volunteers.php">Volunteers</a></li>
			<li><a href="../contractor.php">Contractor</a></li>
			<li><a href="details.php">Account Details</a></li>
			<li><a href="job.php">Jobs</a></li>
		</ul>
	</div>
<?php } else if($_SESSION['user_type'] == 'Manager') { ?>

	<div>
		<ul>
			<li><a href="volunteers.php">Volunteers</a></li>
			<li><a href="../contractor.php">Contractor</a></li>
			<li><a href="details.php">Account Details</a></li>
			<li><a href="job.php">Jobs</a></li>
		</ul>
	</div>
<?php } else if($_SESSION['user_type'] == 'Volunteer') { ?>

	<div>
		<ul>
			<li><a href="../contractor.php">Contractor</a></li>
			<li><a href="details.php">Account Details</a></li>
			<li><a href="job.php">Jobs</a></li>
		</ul>
	</div>
	
<?php } else if($_SESSION['user_type'] == 'Migrant') { ?>

	<div>
		<ul>
		    <li><a href="details.php">Account Details</a></li>
			<li><a href="job_status.php">Job Status</a></li>
		</ul>
	</div>
	
<?php } else { ?>

	<?php header("location:home.php"); ?>

<?php } ?>