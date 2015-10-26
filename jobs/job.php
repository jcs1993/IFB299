<?php 
require("../db_connect.php");
require("../templates/header_sub.php"); 
$account = $_SESSION['Username'];
?>
<title><?=$account?>'s Account </title>
<h1>Work Orders (Jobs)</h1>
<h2>Search by Job Number</h2>
<hr><hr />
<p class="information">Please enter an existing job number to view its details.</p>
<?php //commented out due to moving the functions from accounts to home page ("../templates/account_menu_sub.php") ?>
	  <form action="job_search.php" method="POST">
			<table>
				<tr><td>Job Number: </td><td><input type="text" name="id_search" required/></td></tr>
				<tr><td></td><td><input type="submit" value="Search" /></td></tr>
			
			
	  		</table>
	  </form>
	  <hr />
	  <p><a href="job_home.php">Return to Jobs Menu</a></p>


<?php require("../templates/footer.php"); ?>