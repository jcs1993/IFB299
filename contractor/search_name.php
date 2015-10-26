<!--
Displays a form to allow contractor database to be searched by business name
gets the input and posts to search_results.php?option1
-->

<?php require("../templates/header_sub.php"); ?>

<title>Contractor Management System - Search</title>
<link rel="stylesheet" href="../css/style.css">

<h1>Contractor Management System</h1>
<h2>Search by Business Name</h2>
<hr><hr>
<p class="information">Enter the contractors business name to conduct a search.</p>
<form action="search_results.php?option=1" method="post" autocomplete="off">
	<table>
		<tr>
			<td>Enter Name:</td>
			<td>
			<input maxlength="45" name="searchBox" required="" type="text" /></td>
		</tr>
		<tr>
			<td></td>
			<td><input name="searchButton" type="submit" value="Search" /></td>
		</tr>
	</table>
</form>
<hr>
<p><a href="../contractor.php">Return to Main Menu</a></p>

<?php require("../templates/footer.php"); ?>
