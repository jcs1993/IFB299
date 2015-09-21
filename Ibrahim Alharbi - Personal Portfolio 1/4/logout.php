<?php
session_start();

include 'info.php';

$_SESSION['login']=0;
session_unset();
header("Location: ".$host_url."/index.php");


?>