<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function phpString($phpString){
eval("$phpString");
}
$sumNo=1+1;
$connect="";
$string="echo \"welcome to the world $sumNo\";";
$string.="$connect=mysql_connect(localhost,root,'');if($connect) echo \"connected\"; else echo \"not connected\";";
$result=  phpString($string);
if($result)
    echo $result;
else
    echo '';