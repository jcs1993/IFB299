<?php 
require("../db_connect.php");
require("../templates/header_sub.php"); 
?>
<head>
    <title>Scheduling For Volunteer</title>
</head>

<body>
    <h1>Scheduling For Volunteer</h1>
    <hr />

    <form method="post" action="create_roster.php">
        <center>
        <table style="width:700px">
            <tr>
                <td colspan="2" style="height:20px" >
                </td>
            </tr>
            <tr>
                <td colspan="2" style="border-bottom:solid 1px black">
                    <h2>Create Roster</h2>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td style="text-align: right">Date :</td>
                <td> 
                <?php
                   	$rday="";
                    if(isset($_GET["rday"]))
                    {
                        $rday=$_GET["rday"];
                    }
                    if($rday=="")
                    {
                    	$datetoshow = date('Y-m-d');
                    	echo '<input type="date" name="rday" style="width: 397px" value="'.$datetoshow.'" />';
                    }
                    else
                    {
                    	echo '<input type="date" name="rday" style="width: 397px" value="'.$rday.'" />';
                    }
                ?>
                	
                </td>
            </tr>
            <tr>
                <td style="text-align: right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Volunteer :</td>
                <td>
                    
                	<select id="volunteers" name="rvolunteer" style="width: 397px; height: 20px;">
                	<option value='0'>Select</option>

                    <?php
                    	$conn = new mysqli($hostname, $username, $password, $database);
						if ($conn->connect_error) {
    						die("Connection failed: " . $conn->connect_error);
						}
						$sql = "SELECT `FirstName`,`LastName`,`Username`,`ID` FROM `logins` WHERE `UserLevel` = 'volunteer' and `Approved` = '1'";

						$result = $conn->query($sql);
						if ($result->num_rows > 0) 
						{	
							while($row = $result->fetch_assoc()) 
    						{
    							$volunteer=$row["FirstName"].' '.$row["LastName"].' ('.$row["Username"].')';
    							$volunteer_id=$row["ID"];

        						echo "<option value='".$volunteer_id."'>".$volunteer."</option>";
        					}
        				}
                    ?>
					</select>
                </td>
            </tr>
            <tr style="vertical-align:top; height:40px">
                <td>&nbsp;</td>
                <td>
                    <input id="Button1" type="Submit" value="Add" style="width:70px; height:30px; font-size:10pt" /></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                <?php
                   	$error=0;
                    if(isset($_GET["error"]))
                    {
                        $error=$_GET["error"];
                    }
                    if($error==1)
                    {
                   		echo '<div style="width:400px; height:25px; background-color:maroon">&nbsp; <label style="color:white">Unable to add! Invalid inputs!</label></div>';
                   	}
                   	else if($error==2)
                    {
                   		echo '<div style="width:400px; height:25px; background-color:maroon">&nbsp; <label style="color:white">Unable to add! Already added!</label></div>';
                   	}
                   	else
                   	{
                   		$success=0;
                    	if(isset($_GET["success"]))
                    	{
                        	$success=$_GET["success"];
                    	}
                    	if($success==1)
                    	{
                   			echo '<div style="width:400px; height:25px; background-color:teal">&nbsp; <label style="color:white; font-weight: bold">Successfully Added!</label></div>';
                   		}
                   	}					
                ?>
                </td>
            </tr>
        </table>
    </center>
    </form>

    <center>
        <table style="width:700px">
            <tr>
                <td style="height:30px; text-align:center" ></td>
                    
                  </tr>
            <tr>
                <td style="border-bottom:solid 1px black">
                    <h2>View Roster</h2>
                </td>
            </tr>
            <tr>
                <td style="height:60px" >
                    <center>
                    	<form method="post" action="view_roster.php">
                        <table style="width: 400px; border: dotted 1px black">
                            <tr>
                                <td colspan="2" style="text-align: center"><strong>SEARCH</strong><hr /> </td>
                            </tr>
                            <tr>
                                <td style="text-align: right">Date : </td>
                                <td> 
                                <?php
                   					$rvday="";
                   					if(isset($_SESSION["rvday"]))
                   					{
                   						$rvday=$_SESSION["rvday"];
                   					}
                    				if($rvday=="")
                    				{
                    					$rvday = date('Y-m-d');
                    					echo '<input type="date" name="rvday" style="width: 200px" value="'.$rvday.'" />';
                    				}
                    				else
                    				{
                    					echo '<input type="date" name="rvday" style="width: 200px" value="'.$rvday.'" />';
                    				}
                				?>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: right">View For (days) :</td>
                                <td> 
                                <?php
                                	$rvdayfor=0;
                                	if(isset($_SESSION["rvdayfor"]))
                                	{
                                		$rvdayfor = $_SESSION["rvdayfor"];
                                	}                   					
                    				if($rvdayfor==0)
                    				{
                    					$rvdayfor = 7;
                    					echo '<input type="number" name="rvdayfor" style="width: 200px" value="'.$rvdayfor.'" min="1" max="365" />';
                    				}
                    				else
                    				{
                    					echo '<input type="number" name="rvdayfor" style="width: 200px" value="'.$rvdayfor.'" min="1" max="365" />';
                    				}
                				?>
                                
                            	</td>
                            </tr>
                            <tr>
                                <td style="text-align: right">Volunteer : </td>
                                <td>

                                <select id="vvolunteers" name="rvvolunteer" style="width: 200px; height: 20px;">
                				<option value='0'>All</option>

                    			<?php
                    				$rvvolunteer=0;
                                	if(isset($_SESSION["rvvolunteer"]))
                                	{
                                		$rvvolunteer = $_SESSION["rvvolunteer"];
                                	}

                    				$conn = new mysqli($hostname, $username, $password, $database);
									if ($conn->connect_error) {
    									die("Connection failed: " . $conn->connect_error);
									}
									$sql = "SELECT `FirstName`,`LastName`,`Username`,`ID` FROM `logins` WHERE `UserLevel` = 'volunteer' and `Approved` = '1'";

									$result = $conn->query($sql);
									if ($result->num_rows > 0) 
									{	
										while($row = $result->fetch_assoc()) 
    									{
    										$volunteer=$row["FirstName"].' '.$row["LastName"].' ('.$row["Username"].')';
    										$volunteer_id=$row["ID"];

    										if($volunteer_id == $rvvolunteer)
    										{
        										echo "<option value='".$volunteer_id."' selected='selected'>".$volunteer."</option>";
    										}
    										else
    										{
        										echo "<option value='".$volunteer_id."'>".$volunteer."</option>";
    										}
        								}
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
                    <?php require("show_roster.php"); ?>
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