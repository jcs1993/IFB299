	<?php
	    $username = "root";
        $password = "team5";
        $hostname = "localhost";
        $database = "ifb299db";
        $table = "logins";

        $dbhandle = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
        $selecttable = mysql_select_db($database, $dbhandle);
		
		
		
		

require("templates/header.php"); ?>

<title>Signup</title>


	<h1>New Customer Signup</h1>
	<p>Please complete this form to signup for a new account. All fields must be 
	completed.</p>
	<?php
			$validUser = 1;
			if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['user']) && isset($_POST['pass']) && isset($_POST['pass1']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['address']) && isset($_POST['suburb']) && isset($_POST['postcode']))
		{
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$user = $_POST['user'];
			$pass = $_POST['pass'];
			$pass1 = $_POST['pass1'];
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
			else if ($pass != $pass1) {
				echo '<p class="unsuccessful">Passwords did not match please try again!</p>';
				$validUser = 0;
			}
			else
			{
				$validUser = 1;
				$password = password_hash($pass, PASSWORD_DEFAULT);
				mysql_query("INSERT INTO $table (FirstName, LastName, Username, Password, Email, PhoneNumber, Address, Suburb, Postcode, UserLevel, Approved) VALUES ('$fname', '$lname', '$user', '$password', '$email', '$phone', '$address', '$suburb', '$postcode', 'Migrant', '1')"); 
				header("Location:home.php?success=1");
			}
		}
		mysql_close();
		
?> 

	<form action="signup.php" method="POST" autocomplete="off">
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
		<td>Password:</td><td><input type="password" name="pass" required /></td>
		</tr>
		<tr>
		<td>Repeat Password:</td><td><input type="password" name="pass1" required /></td>
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
	<p><a href="new_volunteer.php">Volunteer Signup</a></p>
	
<?php require("templates/footer.php"); ?>
