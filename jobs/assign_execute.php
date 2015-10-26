<!--
This script takes input from assign.php and adds a contractorID to a record in the jobs table.
-->


<?php
    if (isset($_POST['job_id'])) {
        //Connection to MySQL
        $db_username = "root";
        $db_password = "team5";
        $db_hostname = "localhost";
        $database = "ifb299db";
        $table = "jobs";
	
        $dbhandle = mysql_connect($db_hostname, $db_username, $db_password) or die("Could not connect to database");
        $selecttable = mysql_select_db($database, $dbhandle);


        //Form variables for submission to database
        $inputs = array(
            $_POST['job_id'], 
            $_POST['contractor_id']);
        for ($i = 0; $i < count($inputs); $i++) {
            $inputs[$i] = mysql_real_escape_string($inputs[$i]);
        }
        //update the records with sql query
        $query = "UPDATE $table SET contractorID='$inputs[1]' WHERE jobNumber ='$inputs[0]'";
		echo $query;
       mysql_query($query);
       
       $checkquery = "SELECT * FROM $table WHERE jobNumber = '$inputs[0]' AND contractorID = '$inputs[1]'";
       $result = mysql_query($checkquery);
       $row = mysql_num_rows($result);
       mysql_close();
       
       if ($row == 1) {
       header("Location:assign.php?success=1");
       }
       else {
       header("Location:assign.php?success=2");
       }
    }
    else{
    	header("Location:assign.php?success=0");
    }
?>



