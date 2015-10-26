<?php 
require("../db_connect.php");
require("../templates/header_sub.php"); 
?>
<head>
    <title>My Duty Roster</title>
</head>

<body>
    <h1>My Duty Roster</h1>
    <hr />

    

    <center>
        <table style="width:700px">
            <tr>
                <td style="height:30px; text-align:center" ></td>
                    
                  </tr>
            
            <?php 
            $success=0;
            if(isset($_GET["success"]))
            {
                $success=$_GET["success"];
            }
            if($success==1) {
                echo '<tr>
                <td style="background-color:teal; color:white; font-weight:bold; font-size: 15pt; height: 30px">
                    &nbsp;Your Request Sent Successfully
                </td>
                </tr>';
            }            
            ?>
            <tr>
                <td style="font-weight:bold; font-size: 15pt; height: 30px">
                    &nbsp;&nbsp;
                </td>
            </tr>
            <tr>
                <td style="border-bottom:solid 1px black">
                    <h2>View Roster</h2>
                </td>
            </tr>
            <tr>
                <td style="height:60px" >
                    <center>
                        <form method="post" action="view_my_roster.php">
                        <table style="width: 400px; border: dotted 1px black">
                            <tr>
                                <td colspan="2" style="text-align: center"><strong>SEARCH</strong><hr /> </td>
                            </tr>
                            <tr>
                                <td style="text-align: right">Date : </td>
                                <td> 
                                <?php
                                    $my_rvday="";
                                    if(isset($_SESSION["my_rvday"]))
                                    {
                                        $my_rvday=$_SESSION["my_rvday"];
                                    }
                                    if($my_rvday=="")
                                    {
                                        $my_rvday = date('Y-m-d');
                                        echo '<input type="date" name="my_rvday" style="width: 200px" value="'.$my_rvday.'" />';
                                    }
                                    else
                                    {
                                        echo '<input type="date" name="my_rvday" style="width: 200px" value="'.$my_rvday.'" />';
                                    }
                                ?>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: right">View For (days) :</td>
                                <td> 
                                <?php
                                    $my_rvdayfor=0;
                                    if(isset($_SESSION["my_rvdayfor"]))
                                    {
                                        $my_rvdayfor = $_SESSION["my_rvdayfor"];
                                    }                                       
                                    if($my_rvdayfor==0)
                                    {
                                        $my_rvdayfor = 7;
                                        echo '<input type="number" name="my_rvdayfor" style="width: 200px" value="'.$my_rvdayfor.'" min="1" max="365" />';
                                    }
                                    else
                                    {
                                        echo '<input type="number" name="my_rvdayfor" style="width: 200px" value="'.$my_rvdayfor.'" min="1" max="365" />';
                                    }
                                ?>
                                
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: center">                    
                                    <input type="submit" value="Search" name="submit" style="width:70px; height:30px; font-size:10pt"/></td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: center; height:5px"></td>
                            </tr>
                        </table>
                    </center>
                    </form>
                </td>
            </tr>
            <tr>
                <td style="height:60px" >
                    <?php require("show_my_roster.php"); ?>
                </td>
            </tr>
        </table>
    </center>
    <p>
        &nbsp;
    </p>
    <p>
        &nbsp;
    </p>
    <p>
        &nbsp;
    </p>

</body>

<?php require("../templates/footer.php"); ?>