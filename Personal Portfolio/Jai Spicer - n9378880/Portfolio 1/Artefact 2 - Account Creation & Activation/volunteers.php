<?php 
require("../db_connect.php");
require("../templates/header_sub.php"); 
?>

<link rel="stylesheet" href="../css/style.css">
<title>Volunteers</title>

<?php require("../templates/account_menu_sub.php") ?>

<?php
	$search;
	if(!isset($search))
	{
		$con = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
		$database = mysql_select_db($database, $con);
		$table = "logins";
		$query = "SELECT * FROM $table WHERE UserLevel='Volunteer'";
		$result = mysql_query($query);
		$row = mysql_num_rows($result);
		$i = 0;
		
		while ($i < $row)
		{
			$user = mysql_result($result, $i, "Username");
			$email = mysql_result($result, $i, "Email");
			$approved = mysql_result($result, $i, "Approved");
			
			if ($approved == 1)
			{
				$approved = 'Yes';
			}
			else
			{
				$approved = 'No';
			}
			
			echo
			"
			<tr><td><b>Username: </b></td><td>$user</td></tr><br/>
			<tr><td><b>Email: </b></td><td>$email</td></tr><br/>
			<tr><td><b>Approved: </b></td><td>$approved</td></tr><br/>
			";
			if ($approved == 'Yes')
			{
				echo
				"
				<form action='edit_volunteer.php' method='POST'>
					<input type='hidden' name='user' value='$user'>
					<input type='hidden' name='set' value='0'/>
					<input type='submit' value='Cancal User' />
				</form>
				<br/>
				";
			}
			else
			{
				echo
				"
				<form action='edit_volunteer.php' method='POST'>
					<input type='hidden' name='user' value='$user'>
					<input type='hidden' name='set' value='1'/>
					<input type='submit' value='Approve User' />
				</form>
				<br/>
				";
			}
			
			
			$i++;
		}
	}
?>

<?php require("../templates/footer.php"); ?>