<!--
Main page for the contractor database functions. This page links to other pages to add, search or update contractor information.
-->

<?php require("templates/header.php"); ?>

<title>Contractor Management System - Main Menu</title>

<h1>Contractor Management</h1>		
<hr>
<hr>
<p class="information">Add new contractor information to the system</p>
<p><a href="contractor/add.php">Add Contractor</a></p>
<hr>
<p class="information">Search for existing contractor contact information</p>
<p><a href="contractor/search_name.php">Search by Business Name</a></p>
<p><a href="contractor/search_postcode.php">Search by Postcode</a></p>

<hr>
<p class="information">Update information for an existing contractor. The contractor number is required to perform this function.</p>
<p><a href="contractor/update.php">Update Contractor Information</a></p>

<hr>

<?php require("templates/footer.php"); ?>