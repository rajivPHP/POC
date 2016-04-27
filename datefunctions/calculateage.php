<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$year='19910515';
$yeardiff=date('Ymd',strtotime($year));
$getage=date('Ymd');
$diff=$getage-$yeardiff;
//echo $diff;exit;
$days=floor($diff/(60*60*24))+1;
$years=floor($days/365);
$months=floor(($days % 365) / 30);
$years= substr($days, 0,2);
echo $months;exit;
echo $years."<br />";

echo "<br />";


echo "$months<br />";

$birthdate = new DateTime("1991-05-15");
$today     = new DateTime();
$interval  = $today->diff($birthdate);
echo $interval->format('%y years');
echo "<br />";
echo $interval->format('%m Months');
echo "<br />";
echo $interval->format('%d Days');
?>

