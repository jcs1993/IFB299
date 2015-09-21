<?php
session_start();
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>HelpDesk | Login</title>
    <style type="text/css">
        .Heading1 {
            font-family: "Palatino Linotype";
            font-size: 48px;
            font-weight: bold;
            position: relative;
            top: 10px;
        }

        .Divstyle1 {
            width: 1000px;
            margin: auto auto;
        }

        .auto-style4 {
            width: 100%;
        }

        .auto-style5 {
            width: 395px;
        }

        .auto-style3 {
            width: 52px;
        }

        .auto-style2 {
        }

        .auto-style6 {
            width: 246px;
        }

        #Text1 {
            width: 235px;
        }

        #Text2 {
            width: 217px;
        }

        #Password1 {
            width: 235px;
        }

        .auto-style10 {
            height: 42px;
        }

        .auto-style11 {
            height: 70px;
        }

        .auto-style13 {
            width: 395px;
            height: 70px;
        }

        .auto-style14 {
            width: 50px;
        }

        #Textemail {
            width: 232px;
        }
        #Textpass {
            width: 232px;
        }
        .auto-style16 {
            height: 30px;
        }
        .auto-style17 {
            height: 50px;
        }
        #Select1 {
            width: 238px;
        }
        .auto-style18 {
            width: 52px;
            height: 3px;
        }
        .auto-style19 {
            width: 123px;
            height: 3px;
        }
        .auto-style20 {
            width: 246px;
            height: 3px;
        }
        .auto-style21 {
            width: 50px;
            height: 3px;
        }
    </style>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" style="background-image: url(images/imgbgrepeat-blueedition.jpg)">
    <div style="height: 100px; background-color: #003366; margin: 0 0 0 0">
        <div class="Divstyle1">
            <span class="Heading1" style="color: white">&nbsp; HELP DESK</span>
        </div>
    </div>
    <div class="Divstyle1">
        <table class="auto-style4">
            <tr>
                <td class="auto-style17"></td>
                <td style="font-family: 'Palatino Linotype'; font-size: 12pt; color: blue; font-weight: bold" class="auto-style17"></td>
            </tr>
            
            <?php
                $reg=0;
                if(isset($_GET["reg"]))
                {
                    $reg=$_GET["reg"];
                }
                if($reg==1)
                {
                echo '<tr>
                <td class="auto-style18"></td>
                <td style="border:1px solid gray; text-align:center; font-family: '.'Palatino Linotype'.'; font-size: 11pt; font-weight: bold; background-color:teal; color:white" class="auto-style17">
                    Registration Success! Please Log In
                </td>
                </tr>';
                }
                else if($reg==2)
                {
                echo '<tr>
                <td class="auto-style18"></td>
                <td style="border:1px solid gray; text-align:center; font-family: '.'Palatino Linotype'.'; font-size: 11pt; font-weight: bold; background-color:teal; color:white" class="auto-style17">
                    Registration Success! Please wait untill it\'s approved by manager. It may take upto 24 hours
                </td>
                </tr>';
                }
            ?>
            <tr>
                <td class="auto-style16">&nbsp;</td>
                <td style="font-family: 'Palatino Linotype'; font-size: 12pt; color: blue; font-weight: bold" class="auto-style16">&nbsp;</td>
            </tr>
            <tr>
                <td class="auto-style10">
                    <div style="width: 556px; margin: auto auto; font-family: 'Palatino Linotype'; font-size: 12pt; color: blue; font-weight: bold">
                        Hi
                    </div>
                </td>
                <td style="font-family: 'Palatino Linotype'; font-size: 12pt; color: blue; font-weight: bold" class="auto-style10">Log In</td>
            </tr>
            <tr>
                <td style="vertical-align: top">
                    <div style="width: 556px; margin: auto auto; text-align: justify; font-family: 'Palatino Linotype'; font-size: 11pt; line-height: 120%">
                        HELPDESK website is developed to help our community members to get competitive service from the service provides. Additionally, it also manage the responsibity of volunteers in an efficient way.
                        <br />
                        To get benefit from HELPDESK please register to our system<br />
                        <br />
                        <a href="register_migrants.php">Register-Migrants</a>&nbsp;&nbsp;&nbsp; <a href="register_volunteers.php">Register-Volunteers</a>
                    </div>
                </td>
                <td class="auto-style5" style="border-left-style: solid; border-left-width: thin; border-left-color: #C0C0C0">
                    <div id="login">
                        <form method="post" action="checkLogin.php">
                        <table cellpadding="0" cellspacing="0" style="border-left: solid 1px gray">
                            <tr>
                                <td class="auto-style3">&nbsp;</td>
                                <td class="auto-style2">&nbsp;</td>
                                <td class="auto-style6">&nbsp;</td>
                                <td class="auto-style14">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="auto-style3">&nbsp;</td>
                                <td class="auto-style2">Type:</td>
                                <td class="auto-style6">
                                    <select id="Select1" name="Dtype">
                                        <option>Migrant</option>
                                        <option>Volunteer</option>
                                        <option>Manager</option>
                                    </select></td>
                                <td class="auto-style14">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="auto-style18"></td>
                                <td class="auto-style19"></td>
                                <td class="auto-style20"></td>
                                <td class="auto-style21"></td>
                            </tr>
                            <tr>
                                <td class="auto-style3">&nbsp;</td>
                                <td class="auto-style2">Email:</td>
                                <td class="auto-style6">
                                    <input id="Textemail" name="Textemail" maxlength="100" type="text" /></td>
                                <td class="auto-style14">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="auto-style18"></td>
                                <td class="auto-style19"></td>
                                <td class="auto-style20"></td>
                                <td class="auto-style21"></td>
                            </tr>
                            <tr>
                                <td class="auto-style3">&nbsp;</td>
                                <td class="auto-style2">Password:</td>
                                <td class="auto-style6">
                                    <input id="Textpass" name="Textpass" type="password" /></td>
                                <td class="auto-style14">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="auto-style3">&nbsp;</td>
                                <td class="auto-style2">&nbsp;</td>
                                <td class="auto-style6">&nbsp;</td>
                                <td class="auto-style14">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="auto-style3">&nbsp;</td>
                                <td class="auto-style2">&nbsp;</td>
                                <td class="auto-style6">
                                    <input id="Submit1" type="submit" value="Login" /></td>
                                <td class="auto-style14">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="auto-style3">&nbsp;</td>
                                <td class="auto-style2">&nbsp;</td>
                                <td class="auto-style6">&nbsp;</td>
                                <td class="auto-style14">&nbsp;</td>
                            </tr>
                            <?php
                                $error=0;
                                if(isset($_GET["error"]))
                                {
                                    $error=$_GET["error"];
                                }
                                if($error==1)
                                {
                                    echo '<tr id="err_msg">
                                    <td class="auto-style3">&nbsp;</td>
                                    <td class="auto-style2" colspan="2"; align="center" style="color:white; background-color:maroon; font-family:'.'Palatino Linotype'.'; font-size:11pt">
                                    Invalid Username/Password/Type
                                    </td>
                                    <td class="auto-style14">&nbsp;</td>
                                    </tr>';
                                    $_SESSION['login']=0;
                                }
                                else if($error==2)
                                {
                                    echo '<tr id="err_msg">
                                    <td class="auto-style3">&nbsp;</td>
                                    <td class="auto-style2" colspan="2"; align="center" style="color:white; background-color:maroon; font-family:'.'Palatino Linotype'.'; font-size:11pt">
                                    This Volunteer Account is Still Pending
                                    </td>
                                    <td class="auto-style14">&nbsp;</td>
                                    </tr>';
                                    $_SESSION['login']=0;
                                }
                            ?>
                        </table>
                        </form>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="auto-style11"></td>
                <td class="auto-style13"></td>
            </tr>
        </table>
    </div>
    <div style="height: 100px; background-color: #ffffff;">
        <hr />
        <div class="Divstyle1" style="height: 100px;">
            <span class="newStyle1">&nbsp;&nbsp; Copyright &copy; Team5 | QUT
            <br />
                <br />
                <br />
            </span>
        </div>
    </div>
</body>
</html>
