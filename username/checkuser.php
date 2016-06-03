<?php
/**
 * Created by PhpStorm.
 * User: aequalis
 * Date: 3/6/16
 * Time: 3:12 PM
 */
echo "<pre>";print_r($_POST);exit;
$db = include_once('../php_functions/config.php');
include_once('../php_functions/functions.php');
if ($db) {
    $username = mysql_real_escape_string($_POST['username']);
    $checkUsername = checkUsername($username);
    if ($checkUsername == 0) {
        return true;
    } else {
        return false;
    }
} else {
    echo "Failed to connect DB" . mysql_error();
}
?>