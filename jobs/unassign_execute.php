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
        $inputs = mysql_real_escape_string($_POST['job_id']);
        
        //update the records with sql query
        $query = "UPDATE $table SET contractorID= NULL WHERE jobNumber ='$inputs'";
		echo $query;
       mysql_query($query);
      
       $checkquery = "SELECT * FROM $table WHERE jobNumber = '$inputs' AND contractorID IS NULL";
       $result = mysql_query($checkquery);
       $row = mysql_num_rows($result);
       mysql_close();
       
       if ($row == 1) {
       header("Location:unassign.php?success=1");
       }
       else {
       header("Location:unassign.php?success=2");
       }
    }
    else{
    	header("Location:unassign.php?success=0");
    }
?>



