<?php
session_start();
include 'info.php';


$userid= trim($_SESSION["userid"]);
$success=0;

$conn = new mysqli($servername, $db_username, $db_password, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM tbl_userinfo where (id='".$userid."')";

$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
    $success=1;
    while($row = $result->fetch_assoc()) 
    {
        $user_fullname=$row["fullname"];
        $user_usertype=$row["usertype"];
        $user_contact=$row["contact"];
        $user_address=$row["address"];
        $user_postcode=$row["postcode"];
        $user_jobpostcode=$row["jobpostcode"];
    }
} 
$conn->close();
?>