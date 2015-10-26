<?php 
    session_start();
    
    require("../db_connect.php");

    if($_POST["my_rvday"]!= "")
    {
        $_SESSION['my_rvday'] = $_POST["my_rvday"];
    }
    else
    {
        $_SESSION['my_rvday']=date('Y-m-d');
    }


    if($_POST["my_rvdayfor"] == "")
    {
        $_SESSION["my_rvdayfor"] = "7";
    }
    else
    {
        $_SESSION["my_rvdayfor"] = $_POST["my_rvdayfor"];
    }
    
    header("Location: volunteer_my_roster.php");
    die();
    
?>