<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$data="";
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
$fileOpen=fopen("filename.txt",'w+');
$queryStudent="SELECT * FROM students;";
$resultStudent=  mysql_query($queryStudent);
while($arrayStudent=  mysql_fetch_array($resultStudent)){
    $listStudent[]=$arrayStudent["first_name"];
}
   // echo "<pre>";print_r($listStudent);exit;
$writeContent= fwrite($fileOpen,$listStudent["0"]);
$data=  file_get_contents("filename.txt");
?>
<div id="content">
    <?php
//print $data;
$exe_tmp = exec('c:\WINDOWS\system32\cmd.exe /c "print /d:\\SERVER\printer C:\xammp\public_html\printer\filename.txt"');
//echo "<script>window.print()</script>";
echo $exe_tmp;
?>
</div>
