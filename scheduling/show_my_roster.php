<?php 	
	require("../db_connect.php");

	$dateofduty=$_SESSION['my_rvday'];
	$viewfor=$_SESSION["my_rvdayfor"];
	$volunteer_username=$_SESSION['Username'];

    

    if($dateofduty==""){
        $dateofduty==date('Y-m-d');
    }
    if($viewfor==""){
        $viewfor=7;
    }



	echo 	'<form method="post" action="delete_my_roster.php">
            <table border="1" style="width:100%;">
            <tr>
               	<td style="text-align: center; width:140px">Date</td>
               	<td>Volunteer</td>
         	</tr>';

    $conn = new mysqli($hostname, $username, $password, $database);
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	}

	$from=date($dateofduty);
	$add_diff=' + '.($viewfor-1).' days';
	$to=date('Y-m-d', strtotime($from. $add_diff));

	$sql = "SELECT scheduling.id, scheduling.dateofduty, logins.firstname, logins.lastname, logins.username, logins.email 
	FROM scheduling inner join logins on scheduling.volunteer_id = logins.id where (scheduling.dateofduty between '".$from."' AND '".$to."')";
	$sql=$sql." AND (logins.username = '".$volunteer_username."') order by scheduling.dateofduty DESC";



	$result = $conn->query($sql);
	if ($result->num_rows > 0) 
	{
		$i=0;
		while($row = $result->fetch_assoc()) 
    	{

    		$volunteer='Name: '.$row["firstname"].' '.$row["lastname"].' ('.$row["username"].') <br/>Email: '.$row["email"];
    		$id=$row["id"];

			echo 	'<tr>
                <td style="text-align: center; width:140px">'.$row["dateofduty"].'</td>
                <td>'.$volunteer.'</td>
            	</tr>';
            $i++;
		}
    }
    else
    {
      	echo 	'<tr>
                <td style="text-align: center; width:140px">&nbsp;</td>
                <td>&nbsp;</td>
            	</tr>';
    }

    echo '</table> </form>';
?>