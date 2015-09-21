<?php


    include 'isaccessible.php';
    $pagename='Home';
    $selected_menu='';

    if($success!=0)
    {
        include 'sub_head.php';
        include 'sub_menu.php';
        include 'sub_homebody.php';
        include 'sub_bottom.php';
    }
    else
    {
        header("Location: ".$host_url."/index.php");
    }
?>