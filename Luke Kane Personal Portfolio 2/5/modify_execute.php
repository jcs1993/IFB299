<!--
This script is called from edit_client.php. This takes the post from the previous
page and runs an sql query to update the record into the database. Returns either 1 for success
or 0 for fail to the customer.php file.
-->


<?php
	$ID = $_GET['record'];
    if (isset($_POST['FirstName'])) {
        //Connection to MySQL
        $db_username = "root";
        $db_password = "team5";
        $db_hostname = "localhost";
        $database = "ifb299db";
        $table = "logins";
	
        $dbhandle = mysql_connect($db_hostname, $db_username, $db_password) or die("Could not connect to database");
        $selecttable = mysql_select_db($database, $dbhandle);


        //Form variables for submission to database
        $inputs = array(
            $_POST['FirstName'], 
            $_POST['LastName'],
            $_POST['Email'],
            $_POST['PhoneNumber'],
            $_POST['Address'],
            $_POST['Suburb'],
            $_POST['Postcode']);
        for ($i = 0; $i < count($inputs); $i++) {
            $inputs[$i] = mysql_real_escape_string($inputs[$i]);
        }
        //update the records with sql query
        $query = "UPDATE $table SET FirstName='$inputs[0]', LastName='$inputs[1]', Email='$inputs[2]', PhoneNumber='$inputs[3]', Address='$inputs[4]', Suburb='$inputs[5]', Postcode='$inputs[6]' WHERE ID ='$ID'";
		echo $query;
       mysql_query($query);
       mysql_close();
       header("Location:../customer.php?success=1");
    }else{
    	header("Location:../customer.php?success=0");
    }
?>



