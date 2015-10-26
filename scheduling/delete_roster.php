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


		$btn="accept_".$i;
		if(isset($_POST[$btn])){
			$hbtn="hidden_".$i;

			$conn = new mysqli($hostname, $username, $password, $database);
			if ($conn->connect_error) {
    			die("Connection failed: " . $conn->connect_error);
			}
			$sql = "select request, reqdate from scheduling where (id='".$_POST[$hbtn]."')";	
			$result = $conn->query($sql);
			if ($result->num_rows > 0) 
			{
				while($row = $result->fetch_assoc()) 
    			{
    				$req=$row["request"];
    				$reqdate=$row["reqdate"];
    				break;
    			}

    			if($req == 1) {
    				$sql = "delete from scheduling where (id='".$_POST[$hbtn]."')";	
    			} else if($req == 2) {    				
    				$sql = "update scheduling set dateofduty='".$reqdate."', request='0', reqdate=NULL where (id='".$_POST[$hbtn]."')";	
    			}

    			$result = $conn->query($sql);
				break;
    		}
		}

		$btn="reject_".$i;

		if(isset($_POST[$btn])){
			$hbtn="hidden_".$i;

			$conn = new mysqli($hostname, $username, $password, $database);
			if ($conn->connect_error) {
    			die("Connection failed: " . $conn->connect_error);
			}
			$sql = "update scheduling set request='0', reqdate=NULL where (id='".$_POST[$hbtn]."')";	
			$result = $conn->query($sql);
			break;
		}

	}
	
	header("Location: volunteer_roster.php");
?>