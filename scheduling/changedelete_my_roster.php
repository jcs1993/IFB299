<?php 
	session_start();
	
	require("../db_connect.php");

	for($i=0;$i<365;$i++){

		$btn="delete_".$i;
		if(isset($_POST[$btn])){
			$hbtn="hidden_".$i;

			$id = $_POST[$hbtn];

			$conn = new mysqli($hostname, $username, $password, $database);
			if ($conn->connect_error) {
    			die("Connection failed: " . $conn->connect_error);
			}
			$sql = "update scheduling set request = '1' where (id = '".$id."')";
			$result = $conn->query($sql);
			break;
		}


		$btn="change_".$i;
		if(isset($_POST[$btn])){
			$hbtn="hidden_".$i;
			$dbtn="cday_".$i;

			$id = $_POST[$hbtn];
			$newdate = $_POST[$dbtn];

			$conn = new mysqli($hostname, $username, $password, $database);
			if ($conn->connect_error) {
    			die("Connection failed: " . $conn->connect_error);
			}
			$sql = "update scheduling set request = '2', reqdate = '".$newdate."' where (id = '".$id."')";	
			$result = $conn->query($sql);
			break;
		}
	}
	
	header("Location: volunteer_my_roster.php?success=1");
?>