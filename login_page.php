<?php require("templates/header.php"); ?>
<?php require("db_connect.php"); ?>

	<?php
		if(isset($_POST['submit']))
		{
			$user = htmlentities($_POST['username']);
			$pass = htmlentities($_POST['password']);
			
			$table = "logins";
			
			$con = mysqli_connect($hostname, $username, $password, $database) or die("Could not connect to database");
			$query = "SELECT * FROM $table WHERE username='$user'";
			
			$query = mysqli_query($con, $query);
			$result = mysqli_fetch_assoc($query);
			if($result == NULL)
			{
				echo "<p class='unsuccessful'>Incorrect username or password, please try again.</p>";

			}
			else
			{
				$hash = $result['Password'];
				if(password_verify($pass, $hash))
				{
					if($result['Approved'] == 1)
					{
						$_SESSION['Username'] = $user;
						$_SESSION['user_type'] = $result["UserLevel"];
						if($result['PasswordExpired'] == 1){
							$_SESSION['logged_in'] = false;
							header("Location:expired_password.php");
						} else {
						$_SESSION['logged_in'] = true;
						header("Location:home.php");
						}
					}
					else
					{
						echo "<p class='unsuccessful'>User is not approved</p>";
					}
					
				}
				else
				{
					echo "<p class='unsuccessful'>Incorrect username or password, please try again.</p>";
				}
			}

		}
	?>
	<title>Login</title>
	<h1>System Login</h1>
		<p>Please enter your username and password to continue.</p>
		<form action="" method="POST" autocomplete="off">
			<table>
			<tr>
			<td>Username: </td><td><input type="text" name="username" placeholder="Username" required></td><td rowspan="3">
				<img alt="Padlock" longdesc="Padlock" src="images/padlock.png" width="10%"></td>
			</tr>
			<tr>
			<td>Password: </td><td><input type="password" name="password" placeholder="Password" required></td>
			</tr>
			<tr>
			<td></td><td>
				<input type="submit" name="submit" value="Login" /></td>
			</tr>
		</table>
		</form>
		<p><a href="signup.php">I don't have an account</a></p>
	
<?php require("templates/footer.php"); ?>