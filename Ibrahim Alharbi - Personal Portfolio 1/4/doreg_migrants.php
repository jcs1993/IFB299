<?php
session_start();
include 'info.php';


if(!(isset($_POST["Textfullname"])&&isset($_POST["Textcontact"])&&isset($_POST["Textemail"])&&isset($_POST["Textpass"])&&isset($_POST["Textpass1"])&&isset($_POST["Textaddress"])&&isset($_POST["Textpostcode"])))
{
    header("Location: ".$host_url."/register_migrants.php?error='Please fill all fields'");
}
else
{
    $fullname=trim($_POST["Textfullname"]);
    $contact=trim($_POST["Textcontact"]);

    $email=trim($_POST["Textemail"]);
    $password=trim($_POST["Textpass"]);
    $password1=trim($_POST["Textpass1"]);

    $address=trim($_POST["Textaddress"]);
    $postcode=trim($_POST["Textpostcode"]);



    if($fullname==""||$contact==""||$email==""||$password==""||$password1==""||$address==""||$postcode=="")
    {
        header("Location: ".$host_url."/register_migrants.php?error='Please fill all fields'");
        die();
    }
    else if($password!=$password1)
    {
        header("Location: ".$host_url."/register_migrants.php?error='Passwords are not same'");
        die();
    }
    else if(strlen($password)<6)
    {
        header("Location: ".$host_url."/register_migrants.php?error='Password should be at least 6 characters long'");
        die();
    }
    else if (check_email_address($email)!=true) 
    {
        header("Location: ".$host_url."/register_migrants.php?error='Please provide valid email address'");
        die();
    }



    
    $conn = new mysqli($servername, $db_username, $db_password, $db_name);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "select id from tbl_userinfo where (email='".$email."' AND usertype='migrant')";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        $conn->close();
        header("Location: ".$host_url."/register_migrants.php?error='There is a migrant account exist for this email. Please log in!'");
        die();
    }
    else
    {
        $sql = "insert into tbl_userinfo (fullname, contact, email, password, address, postcode, usertype) values ('".$fullname."','".$contact."','".$email."','".$password."','".$address."','".$postcode."','migrant')";

        if ($conn->query($sql) === TRUE) 
        {
            $conn->close();
            header("Location: ".$host_url."/index.php?reg=1");
            die();
        } 
        else 
        {
            $conn->close();
            header("Location: ".$host_url."/register_migrants.php?error='Registration failed for unknown reason'");
            die();
        }
    }
}


function check_email_address($email) {
        // First, we check that there's one @ symbol, and that the lengths are right
        if (!preg_match("/^[^@]{1,64}@[^@]{1,255}$/", $email)) {
            // Email invalid because wrong number of characters in one section, or wrong number of @ symbols.
            return false;
        }
        // Split it into sections to make life easier
        $email_array = explode("@", $email);
        $local_array = explode(".", $email_array[0]);
        for ($i = 0; $i < sizeof($local_array); $i++) {
            if (!preg_match("/^(([A-Za-z0-9!#$%&'*+\/=?^_`{|}~-][A-Za-z0-9!#$%&'*+\/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$/", $local_array[$i])) {
                return false;
            }
        }
        if (!preg_match("/^\[?[0-9\.]+\]?$/", $email_array[1])) { // Check if domain is IP. If not, it should be valid domain name
            $domain_array = explode(".", $email_array[1]);
            if (sizeof($domain_array) < 2) {
                return false; // Not enough parts to domain
            }
            for ($i = 0; $i < sizeof($domain_array); $i++) {
                if (!preg_match("/^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$/", $domain_array[$i])) {
                    return false;
                }
            }
        }

        return true;
}


?>