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



	echo 	'<form method="post" action="changedelete_my_roster.php">
            <table border="1" style="width:100%;">
            <tr>
                <td style="text-align: center; width:300px">Date</td>
                <td style="text-align: center; width:400px">My Request to Manager</td>
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

            $today = date('Y-m-d');
            $dateofduty = date("Y-m-d",strtotime($row["dateofduty"]));

            if($dateofduty >= $today) {
    			echo 	'<tr>
                    <td style="text-align: center; width:300px">'.$row["dateofduty"].'</td>
                    <td style="text-align: center; width:400px">
                        <table style="width:400px">
                            <tr>
                                <td style="width: 10px">
                                    
                                <td>
                                <td>
                                    <input name="hidden_'.$i.'" type="hidden" value="'.$id.'" />
                                    New Date:</td>
                                <td>
                                    <input name="cday_'.$i.'" type="date" style="width: 150px; font-size: 10pt" min="'.$today.'" value="'.$today.'" /></td>
                                <td>
                                    <span onclick="return confirm(\'Are you sure to send change request? Request will be approved by the manager!\')">
                                    <input name="change_'.$i.'" type="submit" value="Change Req" style="font-size: 10pt" />
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5"><hr />
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5">
                                    <center>
                                    <span onclick="return confirm(\'Are you sure to send delete request? Request will be approved by the manager!\')">
                                    <input name="delete_'.$i.'" type="submit" value="Delete Request" style="font-size: 10pt"/>
                                    <span>
                                    </center>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>';
            } else {
                echo    '<tr>
                    <td style="text-align: center; width:300px">'.$row["dateofduty"].'</td>
                    <td style="text-align: center; width:400px">
                        You cannot alter roster entry that has already been done!
                    </td>
                </tr>';
            }
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