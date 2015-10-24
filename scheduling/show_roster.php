<?php 	
	require("../db_connect.php");

	$dateofduty=$_SESSION['rvday'];
	$viewfor=$_SESSION["rvdayfor"];
	$volunteer_id=$_SESSION['rvvolunteer'];

    if($dateofduty==""){
        $dateofduty==date('Y-m-d');
    }
    if($viewfor==""){
        $viewfor=7;
    }
    if($volunteer_id==""){
        $volunteer_id=0;
    }

	echo 	'<form method="post" action="delete_roster.php">
            <table border="1" style="width:100%;">
            <tr>
               	<td style="text-align: center; width:140px">Date</td>
               	<td>Volunteer</td>
               	<td style="text-align: center; width:140px">Option</td>
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
	if($volunteer_id!=0)
	{
		$sql=$sql." AND (scheduling.volunteer_id = '".$volunteer_id."') order by scheduling.dateofduty DESC";
	}

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
                <td style="text-align: center; width:140px">
                	<span onclick="return confirm(\'Are you sure?\')">
                	<input name="hidden_'.$i.'" type="hidden" value="'.$id.'"/>
                	<input name="delete_'.$i.'" type="Submit" value="Delete" style="width:70px; height:30px; font-size:10pt; border-width:0px; background-color:transparent; color:blue; text-decoration:underline" />
                	</span>
                </td>
            	</tr>';
            $i++;
		}
    }
    else
    {
      	echo 	'<tr>
                <td style="text-align: center; width:140px">&nbsp;</td>
                <td>&nbsp;</td>
                <td style="text-align: center; width:140px">&nbsp;</td>
            	</tr>';
    }

    echo '</table> </form>';
?>