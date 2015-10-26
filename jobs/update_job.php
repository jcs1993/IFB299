<?php
	require("../templates/header_sub.php");
	require("../db_connect.php");
	$table = "jobs";
	$dbhandle = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
	$selecttable = mysql_select_db($database, $dbhandle);
	
	$jobnumber = $_POST['jobnumber']; 
	
	$jobdesc = $_POST['jobdesc'];
	$jobtype = $_POST['jobtype'];
	$jobstat = $_POST['jobstat'];
	$notes = $_POST['notes'];
	
	$update = "	UPDATE $table 
				SET 
				jobDescription='$jobdesc', 
				jobType='$jobtype',
				jobStatus='$jobstat', 
				progressNotes='$notes'
				WHERE 
				jobNumber='$jobnumber'";
	mysql_query($update);
	mysql_close();
	header("Location:job_list.php");
?>