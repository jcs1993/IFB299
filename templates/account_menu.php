<?php  
$accounttype = $_SESSION['user_type'];
?>

<?php if($_SESSION['user_type'] == 'Admin'){ ?>

	<div>
		<p><a href="account/details.php">Update Account Details</a></p>
	</div>
<?php } else if($_SESSION['user_type'] == 'Manager') { ?>

	<div>
		<p><a href="account/details.php">Update Account Details</a></p>
	</div>
<?php } else if($_SESSION['user_type'] == 'Volunteer') { ?>

	<div>
		<p><a href="account/details.php">Update Account Details</a></p>
	</div>
	
<?php } else if($_SESSION['user_type'] == 'Migrant') { ?>

	<div>
		<p><a href="account/details.php">Update Account Details</a></p>
	</div>
	
<?php } else { ?>

	<?php header("location:home.php"); ?>

<?php } ?>