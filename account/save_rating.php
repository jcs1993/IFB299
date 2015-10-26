<?php
	require("../db_connect.php");
	require("../templates/header_sub.php");
	$table = "jobs";
	$con = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
	$database = mysql_select_db($database, $con);
	
	$rating = $_POST['rating'];
	$job_id = $_POST['jobid'];
	
	$update = "UPDATE $table SET Rating='$rating' WHERE jobNumber='$job_id'";
	mysql_query($update);
	mysql_close();
	header("Location:../home.php");
?>