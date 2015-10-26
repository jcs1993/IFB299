<?php 
require("../db_connect.php");
require("../templates/header_sub.php"); 
$account = $_SESSION['Username'];
?>
<title><?=$account?>'s Account </title>
<h1>Work Orders (Jobs)</h1>
<h2>Remove Contractor Assignment From Job</h2>
<hr><hr />
<p class="information">Please enter job number and contractor number to assign a 
job to a contractor and click 'Assign'</p>

<em class="successful"><?php
	if (isset($_GET["success"])) {
		$success = $_GET['success'];
			if ($success == "1") {
				echo ("Record Updated Successfully!");
			}
	}  ?></em>
<em class="unsuccessful"><?php
	if (isset($_GET["success"])) {
		$success = $_GET['success'];
			if ($success == "0") {
				echo ("Error! Unsuccessful, Please try again!");
			}
			else if ($success == "2") {
				echo ("Error! Job does not exist please check your information and try again!");
			}
	} ?></em>



	  <form action="unassign_execute.php" method="POST">
			<table>
				<tr><td>Job Number: </td><td><input type="text" name="job_id" required/></td></tr>
				<tr><td></td><td><input type="submit" value="Remove Assignment" /></td></tr>
	  		</table>
	  </form>
	  <hr />
	  <p><a href="job_home.php">Return to Jobs Menu</a></p>


<?php require("../templates/footer.php"); ?>