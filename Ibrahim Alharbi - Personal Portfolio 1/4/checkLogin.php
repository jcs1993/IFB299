<?php
session_start();
include 'info.php';


$usertype= trim($_POST["Dtype"]);
$email=trim($_POST["Textemail"]);
$password=trim($_POST["Textpass"]);



$conn = new mysqli($servername, $db_username, $db_password, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, ispending FROM tbl_userinfo where (email='".$email."' AND password='".$password."' AND usertype='".$usertype."')";

$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc()) 
    {
        //die($row["ispending"]);

        if($row["ispending"]=='1')
        {
            $_SESSION['login']=0;
            $conn->close();
            header("Location: ".$host_url."/index.php?error=2");
            die();

        }
        else
        {
           $_SESSION['login']=1;
    	   $_SESSION['userid']=$row["id"];
           $conn->close();
    	   break;
        }
    }
    $conn->close();

    header("Location: ".$host_url."/home.php");
    die();
} 
else 
{
	$_SESSION['login']=0;
	$conn->close();
    header("Location: ".$host_url."/index.php?error=1");
    die();
}
?>