<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo "Function Usages";
echo "<br />";
echo "String Shuffle  ";
$string="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789012345678901234567890123456789";
$random='';
$length='20';
for($i=0;$i<$length;$i++){
    $random[]=$string[rand(0,strlen($string))];
}
$serialKey=  '#'.strtoupper(implode($random, $pieces)).'#';
echo "Serial Key  ".$serialKey;
//Save Format
echo "<br />";

echo "String Shuffle   ";

$strRandom="erwe12121921921";
//
for($i=0;$i<1;$i++)
{
    $strRan[]=  str_shuffle($strRandom);
}
$strRandomSub=  implode($strRan,'');
echo $strRandomSub;
?>
