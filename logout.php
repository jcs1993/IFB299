<?php session_start();
	$_SESSION['logged_in'] = false;
	$_SESSION['Username'] = " ";
	$_SESSION['user_type'] = " ";
	$_SESSION['rvday'] = NULL;
	$_SESSION["rvdayfor"] = NULL;
	$_SESSION['my_rvday'] = NULL;
	$_SESSION["my_rvdayfor"] = NULL;
	
	if (isset($_GET["success"])) {
		$success = $_GET['success'];
			if ($success == "1") {
				header("Location:home.php?success=3");
			}
	}else {

		header("Location:home.php");
	}
?>