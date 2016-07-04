<?php
/**
 * Created by PhpStorm.
 * User: aequalis
 * Date: 3/6/16
 * Time: 12:38 PM
 */
include_once("functions.php");
$hostname = "localhost";
$username = "root";
$password = "root";
$db_name = "project";
$connectDB = connectDB($hostname, $username, $password, $db_name);
if ($connectDB)
    return $connectDB;
else
    return false;
