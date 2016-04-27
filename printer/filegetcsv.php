<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$file=fopen("IX.csv",'r');
$studentInfo=array();
$i=0;
$getcontents=array();
$csvData = file_get_contents($fileName);
$csvData = file_get_contents("IX.csv");
$lines = explode(PHP_EOL, $csvData);
foreach($lines as $data){
    echo "<pre>";print_r($data);exit;

}
while(($getcontents=  fgetcsv($file))!==FALSE){
   if($i==0){
       $headers[]=$getcontents;
   }
   else{
       $studentInfo[]=$getcontents;
   }
   $i++;
}
echo "<pre>";print_r($studentInfo);exit;
?>