<?php 
require("../db_connect.php");
require("../templates/header_sub.php"); 
$account = $_SESSION['Username'];
?>
<link rel="stylesheet" href="../css/style.css">
<title><?=$account?>'s Account </title>

<?php require("../templates/account_menu_sub.php") ?>

	<div id="sub_menu">
      <ul>
	  <form action="job_search.php" method="POST">
			<p>Search Job ID: </p><input type="text" name="id_search" />
			<input type="submit" value="Search" />
	  </form>
	  <li><a href="job_list.php">Full Job List</a></li>
	  </ul>
	</div>


<?php require("../templates/footer.php"); ?>