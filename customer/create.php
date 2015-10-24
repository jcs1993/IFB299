	<?php
	    $username = "root";
        $password = "team5";
        $hostname = "localhost";
        $database = "ifb299db";
        $table = "logins";

        $dbhandle = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
        $selecttable = mysql_select_db($database, $dbhandle);
		
		
		
		

require("../templates/header_sub.php"); ?>

<title>Customer Management - New Customer</title>


	<h1>Customer Management</h1>
	<h2>Add New Customer</h2>
	<hr /><hr />
	<p class="information">Complete the form to add a new customer.</p>
	<?php
			$validUser = 1;
			if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['user']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['address']) && isset($_POST['suburb']) && isset($_POST['postcode']))
		{
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$user = $_POST['user'];
			$pass = rand(1000000, 9999999);
			echo "<p class='successful'> The password generated for the new account is '".$pass."'. Please advise the customer that they will need to select a password at first logon.<br/></p>";
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$address = $_POST['address'];
			$suburb = $_POST['suburb'];
			$postcode = $_POST['postcode'];

			$query = mysql_query("SELECT * FROM $table WHERE Username='$user'");
			if(mysql_num_rows($query) > 0)
			{
				echo '<p class="unsuccessful">Username already taken. Please try again.</p>';
				$validUser = 0;
			}
			else
			{
				$validUser = 1;
				$password = password_hash($pass, PASSWORD_DEFAULT);
				mysql_query("INSERT INTO $table (FirstName, LastName, Username, Password, Email, PhoneNumber, Address, Suburb, Postcode, UserLevel, Approved, PasswordExpired) VALUES ('$fname', '$lname', '$user', '$password', '$email', '$phone', '$address', '$suburb', '$postcode', 'Migrant', '1', '1')");
				echo '<p class="successful">User Added Successfully!</p>'; 
			}
		}
		mysql_close();
		
?> 

	<form action="create.php" method="POST" autocomplete="off">
		<table>
		<tr>
		<td>First Name:</td><td><input type="text" name="fname" <?php if ($validUser == 0){ echo 'value="'.$fname.'"'; }?> required/></td>
		</tr>
		<tr>		
		<td>Last Name:</td><td><input type="text" name="lname" <?php if ($validUser == 0){ echo 'value="'.$lname.'"'; }?> required/></td>
		</tr>
		<tr>
		<td>Username:</td><td><input type="text" name="user" <?php if ($validUser == 0){ echo 'value="'.$user.'"'; }?> required/></td>
		</tr>
		<tr>
		<td>Email:</td><td><input type="text" name="email" <?php if ($validUser == 0){ echo 'value="'.$email.'"'; }?> required/></td>
		</tr>
		<tr>
		<td>Phone Number:</td><td><input type="text" name="phone" <?php if ($validUser == 0){ echo 'value="'.$phone.'"'; }?> required/></td>
		</tr>
		<tr>
		<td>Address:</td><td><input type="text" name="address" <?php if ($validUser == 0){ echo 'value="'.$address.'"'; }?> required/></td>
		</tr>
		<tr>
		<td>Suburb:</td><td><input type="text" name="suburb" <?php if ($validUser == 0){ echo 'value="'.$suburb.'"'; }?> required/></td>
		</tr>
		<tr>
		<td>Postcode:</td><td><input type="text" name="postcode" <?php if ($validUser == 0){ echo 'value="'.$postcode.'"'; }?> required/></td>
		</tr>


		<tr>
		
		<td></td><td><input type="submit" value="Submit" name="Submit" /></td>
	</tr>
	</table>
	</form>
	<p><a href="../customer.php">Back to Customer Management</a></p>
	
<?php require("../templates/footer.php"); ?>
