<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//$post= $_POST;
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
    echo "<pre>";print_r($_POST);exit;
    $username=trim($_POST['username']);
    $password=trim($_POST['password']);
    echo $username;
    $mysqlConnect=  mysql_connect("localhost","root","root");
    if(!$mysqlConnect){
        die("could not connect".mysql_error());
    }
    $db_name="icampus";
    $db=  mysql_select_db($db_name);
    $sql="SELECT * FROM users";?>
