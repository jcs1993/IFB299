<?php 
require("../db_connect.php");
require("../templates/header_sub.php"); 
$account = $_SESSION['Username'];
?>
<link rel="stylesheet" href="../css/style.css">
<title><?=$account?>'s Account </title>

<?php //commented out due to moving the functions from accounts to home page ("../templates/account_menu_sub.php") ?>

	<div id="sub_menu">
      <ul>
	  <form action="job_search.php" method="POST">
			<h1>Search by Job Number</h1>
			<p>Please enter a job number.</p><input type="text" name="id_search" required/>
			<input type="submit" value="Search" />
	  </form>
	  <li><a href="job_list.php">View All Jobs</a></li>
	  </ul>
	</div>


<?php require("../templates/footer.php"); ?>