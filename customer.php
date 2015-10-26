<!--
Main page for the migrant user/customer database functions. This page links to other pages to add, search or update customer information.
-->

<?php require("templates/header.php"); ?>

<link rel="stylesheet" href="../css/style.css">
<title>Customer Management System - Main Menu</title>

<h1>Customer Management</h1>		
<hr>
<hr>

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
	} ?></em>

<p class="information">Add a new customer account.</p>
<p><a href="customer/create.php">Add Customer</a></p>
<hr>
<p class="information">Search for an existing customer account.</p>
<p><a href="customer/search.php">Search Customer Accounts</a></p>

<hr>


<?php require("templates/footer.php"); ?>