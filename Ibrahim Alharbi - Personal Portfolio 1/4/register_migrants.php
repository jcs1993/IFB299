<?php
session_start();
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>HelpDesk | Register</title>
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

        .auto-style3 {
            width: 50px;
        }

        .auto-style2 {
        }

        .auto-style6 {
            width: 500px;
        }

        .auto-style7 {
            width: 50px;
            height: 5px;
        }

        .auto-style9 {
            width: 500px;
            height: 5px;
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


        .auto-style16 {
        }

        .auto-style17 {
            height: 5px;
            width: 212px;
        }

        .auto-style18 {
            width: 50px;
            height: 3px;
        }

        .auto-style19 {
            width: 212px;
            height: 3px;
        }

        .auto-style20 {
            width: 500px;
            height: 3px;
        }

        .auto-style21 {
            height: 13px;
        }

        .auto-style23 {
            width: 395px;
            height: 14px;
        }

        .auto-style24 {
            height: 14px;
        }

        #Textfullname {
            width: 496px;
        }

        #Textcontact {
            width: 496px;
        }

        #Textemail {
            width: 496px;
        }

        #Textpass {
            width: 496px;
        }

        #Textpass1 {
            width: 496px;
        }

        #Textaddress {
            width: 496px;
        }

        #Textpostcode {
            width: 496px;
        }

        .auto-style25 {
            width: 50px;
            height: 30px;
        }

        .auto-style26 {
            height: 30px;
            width: 212px;
        }

        .auto-style27 {
            width: 500px;
            height: 30px;
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
                <td class="auto-style21"></td>
                <td style="font-family: 'Palatino Linotype'; font-size: 12pt; color: blue; font-weight: bold" class="auto-style21"></td>
            </tr>
            <tr>
                <td class="auto-style10" colspan="2">
                    <div style="width: 813px; margin: auto auto; font-family: 'Palatino Linotype'; font-size: 12pt; color: black; font-weight: bold">
                        Migrant-Registration <a href="index.php" style="float: right">Login Here</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="vertical-align: top" colspan="2">
                    <div id="registermigrant" style="margin: auto auto">
                        <form method="post" action="doreg_migrants.php">
                            <table cellpadding="0" cellspacing="0" align="center" style="border: solid 1px gray; font: normal 11pt 'palatino linotype'">
                                <tr>
                                    <td class="auto-style3">&nbsp;</td>
                                    <td class="auto-style16">&nbsp;</td>
                                    <td class="auto-style6">&nbsp;</td>
                                    <td class="auto-style3">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="auto-style3">&nbsp;</td>
                                    <td class="auto-style16">Fullname:*</td>
                                    <td class="auto-style6">
                                        <input id="Textfullname" name="Textfullname" maxlength="100" type="text" /></td>
                                    <td class="auto-style3">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="auto-style18"></td>
                                    <td class="auto-style19"></td>
                                    <td class="auto-style20"></td>
                                    <td class="auto-style18"></td>
                                </tr>
                                <tr>
                                    <td class="auto-style3">&nbsp;</td>
                                    <td class="auto-style16">Contact No:*</td>
                                    <td class="auto-style6">
                                        <input id="Textcontact" name="Textcontact" maxlength="20" type="text" /></td>
                                    <td class="auto-style3">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="auto-style25"></td>
                                    <td class="auto-style26"></td>
                                    <td class="auto-style27"></td>
                                    <td class="auto-style25"></td>
                                </tr>
                                <tr>
                                    <td class="auto-style3">&nbsp;</td>
                                    <td class="auto-style16">Email:*</td>
                                    <td class="auto-style6">
                                        <input id="Textemail" name="Textemail" maxlength="100" type="text" /></td>
                                    <td class="auto-style3">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="auto-style18"></td>
                                    <td class="auto-style19"></td>
                                    <td class="auto-style20"></td>
                                    <td class="auto-style18"></td>
                                </tr>
                                <tr>
                                    <td class="auto-style3">&nbsp;</td>
                                    <td class="auto-style16">Password:*</td>
                                    <td class="auto-style6">
                                        <input id="Textpass" name="Textpass"  maxlength="100"  type="password" /></td>
                                    <td class="auto-style3">&nbsp;</td>
                                </tr>

                                <tr>
                                    <td class="auto-style18"></td>
                                    <td class="auto-style19"></td>
                                    <td class="auto-style20"></td>
                                    <td class="auto-style18"></td>
                                </tr>
                                <tr>
                                    <td class="auto-style3">&nbsp;</td>
                                    <td class="auto-style16">Retype Password:*</td>
                                    <td class="auto-style6">
                                        <input id="Textpass1" name="Textpass1"  maxlength="100"  type="password" /></td>
                                    <td class="auto-style3">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="auto-style3">&nbsp;</td>
                                    <td class="auto-style16">&nbsp;</td>
                                    <td class="auto-style6">&nbsp;</td>
                                    <td class="auto-style3">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="auto-style3">&nbsp;</td>
                                    <td class="auto-style2" colspan="2">
                                        <hr />
                                    </td>
                                    <td class="auto-style3">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="auto-style3">&nbsp;</td>
                                    <td class="auto-style16">&nbsp;</td>
                                    <td class="auto-style6">&nbsp;</td>
                                    <td class="auto-style3">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="auto-style3">&nbsp;</td>
                                    <td class="auto-style16">Address:*</td>
                                    <td class="auto-style6">
                                        <input id="Textaddress" name="Textaddress" maxlength="100" type="text" /></td>
                                    <td class="auto-style3">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="auto-style18"></td>
                                    <td class="auto-style19"></td>
                                    <td class="auto-style20"></td>
                                    <td class="auto-style18"></td>
                                </tr>
                                <tr>
                                    <td class="auto-style3">&nbsp;</td>
                                    <td class="auto-style16">PostCode:*</td>
                                    <td class="auto-style6">
                                        <input id="Textpostcode" name="Textpostcode" maxlength="20" type="text" /></td>
                                    <td class="auto-style3">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="auto-style7"></td>
                                    <td class="auto-style17"></td>
                                    <td class="auto-style9"></td>
                                    <td class="auto-style7">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="auto-style3">&nbsp;</td>
                                    <td class="auto-style16">&nbsp;</td>
                                    <td class="auto-style6">
                                        <input id="Submit1" type="submit" value="Register" /></td>
                                    <td class="auto-style3">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="auto-style3">&nbsp;</td>
                                    <td class="auto-style16">&nbsp;</td>
                                    <td class="auto-style6">&nbsp;</td>
                                    <td class="auto-style3">&nbsp;</td>
                                </tr>

                                <?php
                                $error="0";
                                if(isset($_GET["error"]))
                                {
                                    $error=$_GET["error"];
                                }
                                if($error!="0")
                                {
                                    echo '<tr>
                                    <td class="auto-style3">&nbsp;</td>
                                    <td class="auto-style16" colspan="2" style="background-color: maroon; color: white; text-align: center">'.$error.'</td>
                                    <td class="auto-style3">&nbsp;</td>
                                    </tr>';
                                }
                                ?>
                                
                            
                            <tr>
                                <td class="auto-style3">&nbsp;</td>
                                <td class="auto-style16">&nbsp;</td>
                                <td class="auto-style6">&nbsp;</td>
                                <td class="auto-style3">&nbsp;</td>
                            </tr>

                            </table>
                        </form>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="auto-style24"></td>
                <td class="auto-style23"></td>
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
