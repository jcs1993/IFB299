<?php 
	require("../db_connect.php");

	if($_POST["rday"]== "" || $_POST["rvolunteer"] == "0")
	{
		header("Location: volunteer_roster.php?error=1&rday=".$_POST["rday"]);
		die();
	}
	else
	{
		/*checking whether this user available*/
		$conn = new mysqli($hostname, $username, $password, $database);
		if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
		}
		$sql = "SELECT * FROM `scheduling` WHERE `volunteer_id` = '".$_POST["rvolunteer"]."' and `dateofduty` = '".$_POST["rday"]."'";

		$result = $conn->query($sql);
		if ($result->num_rows > 0) 
		{
			header("Location: volunteer_roster.php?error=2&rday=".$_POST["rday"]);
			die();
        }
        else
        {
        	/*available*/
        	$sql = "insert into scheduling (dateofduty, volunteer_id) values ('".$_POST["rday"]."','".$_POST["rvolunteer"]."')";
			$result = $conn->query($sql);

			header("Location: volunteer_roster.php?success=1&rday=".$_POST["rday"]);
			die();
        }
	}
?>