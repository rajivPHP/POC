<?php
function connectDB($hostname, $username, $password, $db_name)
{
    global $connect;
    global $hostname;
    global $username;
    global $password;
    global $db_name;
    global $err_msg;
    mysql_set_charset('utf8');
    $connect = mysql_connect($hostname, $username, $password);
    if ($connect) {
        $selectDB = mysql_select_db($db_name);
        return true;
    } else {
        $err_msg = "Could not Connect to DB" . mysql_error();
        return false;
    }
}

function checkUsername($username)
{
    global $connect;
    global $err_msg;
    if ($connect) {
        $sqlCheckUsername = "SELECT username FROM `users` where `username`='$username';";
        $resultCheckUsername = mysql_query($sqlCheckUsername);
        return mysql_num_rows($resultCheckUsername);
    }
}

?>