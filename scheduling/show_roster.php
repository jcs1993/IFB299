<?php 	
	require("../db_connect.php");

	$dateofduty=$_SESSION['rvday'];
	$viewfor=$_SESSION["rvdayfor"];
    $volunteer_id=$_SESSION['rvvolunteer'];
    $requestvol=$_SESSION['requestvol'];

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
            <table border="1" style="width:100%; font-size:10pt;">
            <tr>
               	<td style="text-align: center; width:100px">Date</td>
               	<td>Volunteer</td>
               	<td style="text-align: center; width:90px">Option</td>
                <td colspan ="2" style="text-align: center; ">Request and Approval</td>
         	</tr>';

    $conn = new mysqli($hostname, $username, $password, $database);
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	}

	$from=date($dateofduty);
	$add_diff=' + '.($viewfor-1).' days';
	$to=date('Y-m-d', strtotime($from. $add_diff));

	$sql = "SELECT scheduling.id, scheduling.dateofduty, logins.firstname, logins.lastname, logins.username, logins.email, scheduling.request, scheduling.reqdate
	FROM scheduling inner join logins on scheduling.volunteer_id = logins.id where (scheduling.dateofduty between '".$from."' AND '".$to."')";
	if($volunteer_id!=0)
	{
		$sql=$sql." AND (scheduling.volunteer_id = '".$volunteer_id."')";
	}
    if($requestvol == 1) {
        $sql=$sql." AND (scheduling.request <> '1') AND (scheduling.request <> '2')";
    }
    else if($requestvol == 2) {
        $sql=$sql." AND (scheduling.request = '1') OR (scheduling.request = '2')";
    }
    $sql=$sql." order by scheduling.dateofduty DESC";

	$result = $conn->query($sql);
	if ($result->num_rows > 0) 
	{
		$i=0;
		while($row = $result->fetch_assoc()) 
    	{

    		$volunteer=''.$row["firstname"].' '.$row["lastname"].' ('.$row["username"].') <br/>'.$row["email"];
    		$id=$row["id"];

            $req='';
            if($row["request"] == '1'){
                $req='Delete Request';
            } else if($row["request"] == '2'){
                $req='Change to '.$row["reqdate"].' Request';
            }

			echo 	'<tr>
                <td style="text-align: center; width:100px">'.$row["dateofduty"].'</td>
                <td>'.$volunteer.'</td>
                <td style="text-align: center; width:90px">
                	<span onclick="return confirm(\'Are you sure to delete it permanently?\')">
                	<input name="hidden_'.$i.'" type="hidden" value="'.$id.'"/>
                	<input name="delete_'.$i.'" type="Submit" value="Delete" style="font-size:10pt; width:70px; height:30px; border-width:0px; background-color:transparent; color:blue; text-decoration:underline" />
                	</span>
                </td>
                <td style="text-align: center; width:200px">'.$req.'</td>
                <td style="text-align: center; width:90px">';

            if($req != '') {
                echo  '<span onclick="return confirm(\'Are you sure to accept it?\')">
                        <input name="accept_'.$i.'" type="Submit" value="Accept" style="font-size:10pt; width:70px; height:30px; font-size:10pt; border-width:0px; background-color:transparent; color:blue; text-decoration:underline" />
                        </span>
                        <span onclick="return confirm(\'Are you sure to reject it?\')">
                        <input name="reject_'.$i.'" type="Submit" value="Reject" style="font-size:10pt; width:70px; height:30px; font-size:10pt; border-width:0px; background-color:transparent; color:blue; text-decoration:underline" />
                        </span>
                    </td>
                	</tr>';
            }
            else {
                echo  '
                    </td>
                    </tr>';
            }
            $i++;
		}
    }
    else
    {
      	echo 	'<tr>
                <td style="text-align: center; width:100px">&nbsp;</td>
                <td>&nbsp;</td>
                <td style="text-align: center; width:90px">&nbsp;</td>
                <td style="text-align: center; width:200px">&nbsp;</td>
                <td style="text-align: center; width:90px">&nbsp;</td>
            	</tr>';
    }

    echo '</table> </form>';
?>