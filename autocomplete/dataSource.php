<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$host="localhost";
$username="root";
$password="";
$listStudent=array();
$connect=  mysql_connect($host,$username,$password);
$dbName=  mysql_select_db("icampus");
$queryStudent="SELECT * FROM students;";
$resultStudent=  mysql_query($queryStudent);
while($arrayStudent=  mysql_fetch_array($resultStudent)){
    $listStudent[]=$arrayStudent["first_name"];
}
//echo "<pre>";print_r($listStudent);exit;
$resStudent=  json_encode($listStudent);
echo $resStudent;
?>