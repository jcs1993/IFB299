<?php 
	session_start();
	
	require("../db_connect.php");

	for($i=0;$i<365;$i++){
		$btn="delete_".$i;

		if(isset($_POST[$btn])){
			$hbtn="hidden_".$i;

			$conn = new mysqli($hostname, $username, $password, $database);
			if ($conn->connect_error) {
    			die("Connection failed: " . $conn->connect_error);
			}
			$sql = "delete from scheduling where (id='".$_POST[$hbtn]."')";	
			$result = $conn->query($sql);
			break;
		}
	}
	
	header("Location: volunteer_roster.php");
?>