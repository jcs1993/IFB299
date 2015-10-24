<?php session_start(); ?>

<html>
  <head>
    <meta content="en-au" http-equiv="Content-Language">
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<link rel="stylesheet" href="../css/style.css">
  </head>

  <body>
	<div id="main">
  
	<div id="banner">
	</div>

	<div id="menu">
      <ul>
	  <?php if($_SESSION['logged_in'] == true){ ?>
      <li><a href="../home.php">Home</a></li>
      <li><a href="../aboutus.php">About Us</a></li>
      <li><a href="../contactus.php">Contact Us</a></li>
      <li><a href="../account.php">Account</a></li>
      <li><a href="../logout.php">Logout</a></li>
	  <?php } else { ?>
	  <li><a href="../home.php">Home</a></li>
      <li><a href="../aboutus.php">About Us</a></li>
      <li><a href="../contactus.php">Contact Us</a></li>
      <li><a href="../signup.php">Signup</a></li>
      <li><a href="../login_page.php">Login</a></li>
	  <?php } ?>
	</div>