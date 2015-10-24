<?php 
require("../db_connect.php");
require("../templates/header_sub.php"); 
$account = $_SESSION['Username'];
?>
<link rel="stylesheet" href="../css/style.css">
<title><?=$account?>'s Account </title>

<?php //commented out due to moving the functions from accounts to home page require require("../templates/account_menu_sub.php") ?>
  			<h1>Work Orders (Jobs)</h1>
			<h2>Search By Customer Number</h2>
			<hr /><hr />
			<p class="information">Enter a customer number to view associated jobs.</p>
			
		<form action="job_search.php" method="POST">
			<table>
			<tr><td>Customer Number: </td><td><input type="text" name="client_search" required/></td></tr>
			<tr><td></td><td><input type="submit" value="Search" /></td></tr>
			</table>
	  </form>
	  <hr />
	  <p><a href="job_home.php">Return to Jobs Menu</a></p>


<?php require("../templates/footer.php"); ?>