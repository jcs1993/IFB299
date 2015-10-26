<?php require("../templates/header_sub.php"); ?>

<title>Jobs - Main Menu</title>



<h1>Work Orders (Jobs)</h1>		
<h2>Main Menu</h2>
<hr>
<hr>
<p class="information">Add a new work order</p>
<p><a href="job_add.php">Add New Work Order</a></p>
<hr>
<p class="information">Search for an existing work order</p>
<p><a href="job.php">Search by Job Number</a></p>
<p><a href="job_client_search.php">Search by Customer Number</a></p>
<p><a href="job_list.php">View all Jobs</a></p>
<p><a href="job_list_unassigned.php">View all Unassigned Jobs</a></p>

<hr>


<p>Assign and remove job assignment for an existing job</p>
<p><a href="assign.php">Assign Job</a></p>
<p><a href="unassign.php">Remove Assignment</a></p>
<hr />


<?php require("../templates/footer.php"); ?>