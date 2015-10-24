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
				echo "Incorrect username or password";
			}
			else
			{
				if($result['Password'] == $pass)
				{
					if($result['Approved'] == 1)
					{
						$_SESSION['logged_in'] = true;
						$_SESSION['Username'] = $user;
						$_SESSION['user_type'] = $result["UserLevel"];
						header("Location:home.php");
					}
					else
					{
						echo "User is not approved";
					}
					
				}
				else
				{
					echo "Incorrect username or password";
				}
			}

		}
	?>
	<title>Login</title>
	
	<section id="logincontent">
		<form action="" method="POST">
			<input type="text" name="username" placeholder="Username" required> <br />
			<input type="password" name="password" placeholder="Password" required> <br />
			<input type="submit" name="submit" value="Login" />
		</form>
	</section>
	
<?php require("templates/footer.php"); ?>