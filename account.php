<?php 
require("db_connect.php");
require("templates/header.php"); 
$account = $_SESSION['Username'];
?>
<title><?=$account?>'s Account </title>
<h1>Account Tools</h1>
<?php require("templates/account_menu.php") ?>

<?php require("templates/footer.php"); ?>