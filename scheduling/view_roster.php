<?php 
	session_start();
	
	require("../db_connect.php");

	if($_POST["rvday"]!= "")
	{
		$_SESSION['rvday'] = $_POST["rvday"];
	}
	else
	{
		$_SESSION['rvday']=date('Y-m-d');
	}


	if($_POST["rvdayfor"] == "")
	{
		$_SESSION["rvdayfor"] = "7";
	}
	else
	{
		$_SESSION["rvdayfor"] = $_POST["rvdayfor"];
	}
	

	if($_POST["rvvolunteer"] == "")
	{
		$_SESSION['rvvolunteer'] = "0";
	}
	else
	{
		$_SESSION['rvvolunteer'] = $_POST["rvvolunteer"];
	}

	header("Location: volunteer_roster.php");
	die();
	
?>