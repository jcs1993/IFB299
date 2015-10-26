<?php require("templates/header.php"); ?>

<title>Home</title>
<em class="successful"><?php
	if (isset($_GET["success"])) {
		$success = $_GET['success'];
			if ($success == "1") {
				echo ("Account Created Successfully!");
			}
	}  ?></em>
<em class="successful"><?php
	if (isset($_GET["success"])) {
		$success = $_GET['success'];
			if ($success == "2") {
				echo ("Account Created Successfully! Please see a manager to have the account activated.");
			}
	}  ?></em>
	
<em class="successful"><?php
	if (isset($_GET["success"])) {
		$success = $_GET['success'];
			if ($success == "3") {
				echo ("Password was changed successfully. Please login again with your new password.");
			}
	}  ?></em>


<em class="unsuccessful"><?php
	if (isset($_GET["success"])) {
		$success = $_GET['success'];
			if ($success == "0") {
				echo ("Error! Unsuccessful, Please try again!");
			}
	} ?></em>


<?php if($_SESSION['user_type'] == 'Admin' && $_SESSION['logged_in'] == true){ ?>


	<h1>Main Menu</h1>
	<h2>Welcome Admin</h2>
		<hr><hr>
		<ul>
			<li><a href="account/upgrade.php">Edit User Access Level</a></li>
			<li><a href="account/admin.php">View/Update Admin Accounts</a></li>
			<li><a href="account/manager.php">View/Update Manager Accounts</a></li>
			<li><a href="account/volunteers.php">View/Update Volunteer Accounts</a></li>
			<li><a href="scheduling/volunteer_roster.php">View/Update Duty Roster for Volunteer</a></li>
			<li><a href="customer.php">View/Update Customer Accounts</a></li>
			<li><a href="contractor.php">Contractor Management</a></li>
			<li><a href="jobs/job_home.php">Work Orders (Jobs)</a></li>
		</ul>
		<hr />
<?php } else if($_SESSION['user_type'] == 'Manager' && $_SESSION['logged_in'] == true) { ?>

	<h1>&nbsp;Main Menu</h1>
<h2>Welcome Manager</h2>
		<hr><hr>
		<ul>
			<li><a href="scheduling/volunteer_roster.php">View/Update Duty Roster for Volunteer</a></li>
			<li><a href="account/volunteers.php">View/Update Volunteer Accounts</a></li>
			<li><a href="customer.php">View/Update Customer Accounts</a></li>
			<li><a href="contractor.php">Contractor Management</a></li>
			<li><a href="jobs/job_home.php">Work Orders (Jobs)</a></li>
		</ul>
		<hr />
	
<?php } else if($_SESSION['user_type'] == 'Volunteer' && $_SESSION['logged_in'] == true) { ?>

	<h1>&nbsp;Main Menu</h1>
<h2>Welcome Volunteer</h2>
<hr><hr>

		<ul>
			<li><a href="scheduling/view_my_roster.php">View My Duty Roster</a></li>
			<li><a href="customer.php">View/Update Customer Accounts</a></li>
			<li><a href="contractor.php">Contractor Management</a></li>
			<li><a href="jobs/job_home.php">Work Orders (Jobs)</a></li>
		</ul>
		<hr />
	
<?php } else if($_SESSION['user_type'] == 'Migrant' && $_SESSION['logged_in'] == true) { ?>

	<h1>&nbsp;Main Menu</h1>
<h2>Welcome User</h2>
<hr><hr>

		<ul>
			<li><a href="account/job_status.php">Job Status</a></li>
			<li><a href="account/job_history.php">Job History</a></li>
		</ul>
		<hr />
	
<?php } else { ?>

	<h1>Welcome</h1>
	<p>Welcome to the Migrant Help Desk. Please <a href="login_page.php">login</a> to view our services or <a href="signup.php">create an account.</a></p>

<?php } ?>

<?php require("templates/footer.php"); ?>