<?php require("../templates/header_sub.php"); ?>

<title>Work Orders - Add New Work Order</title>

<h1>Work Orders</h1>
<h2>Add New Work Order</h2>
<hr><hr>
<p class="information">Please complete the form to lodge a new work order. All fields 
with * are required to be completed.</p>
<?php
	//code checks to see if field in the form has been posted, if correct all following code executes
    if (isset($_POST['customerID'])) {
        //Connection to MySQL
        $username = "root";
        $password = "team5";
        $hostname = "localhost";
        $database = "ifb299db";
        $table = "jobs";

        $connection = mysqli_connect($hostname, $username, $password, $database);
        if (!$connection){
        	die("Connection failed: " . mysqli_connect_error());
        }

        //Form variables for submission to database
            $customerID = mysqli_real_escape_string($connection, $_POST['customerID']); 
            $jobDescription = mysqli_real_escape_string($connection, $_POST['jobDescription']);
            $jobType = mysqli_real_escape_string($connection, $_POST['jobType']);
            $jobStatus = mysqli_real_escape_string($connection, $_POST['jobStatus']);
            $progressNotes = mysqli_real_escape_string($connection, $_POST['progressNotes']);
            

        $query = "INSERT INTO $table (customerID, jobDescription, jobType, jobStatus, progressNotes) VALUES ('$customerID', '$jobDescription', '$jobType', '$jobStatus', '$progressNotes')";
        $checkCustomer = "SELECT * FROM logins WHERE ID='$customerID' AND UserLevel='Migrant'";
        $checkCustomerResult = mysqli_query($connection, $checkCustomer);
        $rows = mysqli_num_rows($checkCustomerResult);
        
        if ($rows == 1){
		mysqli_query($connection, $query);        
        mysqli_close($connection);
        header("Location:job_add.php?success=1");
        }
        else{
        header("Location:job_add.php?success=0");
        }

    }
    
    ?><em class="successful"><?php
        if (isset($_GET["success"])) {
            $success = $_GET['success'];
            if ($success == "1") {
                echo ("Work Order Created Successfully!");
            }
        }
        ?></em><em class="unsuccessful"><?php
        if (isset($_GET["success"])) {
            $success = $_GET['success'];
            if ($success == "0") {
                echo ("Error! Please check that the customer ID provided is a valid migrant account and try again!");
            }
        }
        ?></em>
<form action="job_add.php" method="post">
	<table>
		<tr>
			<td>Customer ID:</td>
			<td>
			<input maxlength="45" name="customerID" required="" type="text" />*</td>
		</tr>
		<tr>
			<td>Job Description:</td>
			<td>
			<input maxlength="45" name="jobDescription" required="" type="text" />*</td>
		</tr>
		<tr>
			<td>Job Type:</td>
			<td><select name="jobType" required>
			<option value="" selected disabled></option>
			<option>Building</option>
			<option>Plumbing</option>
			<option>Electrical</option>
			<option>Landscaping</option>
			<option>Other</option>
			</select>*</td>
		</tr>
		<tr>
			<td>Job Status:</td>
			<td><select name="jobStatus">
			<option selected="">Open</option>
			<option>In Progress</option>
			<option>Closed</option>
			</select>*</td>
		</tr>
		<tr>
			<td>Notes</td>
			<td><textarea name="progressNotes" cols="20" rows="5"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td>
			<input name="addButton" type="submit" value="Submit Work Order" /></td>
		</tr>
	</table>
</form>
<hr>
<p><a href="job_home.php">Back to Jobs Menu</a></p>

<?php require("../templates/footer.php"); ?>