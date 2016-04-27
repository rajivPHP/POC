<?php
$original_date = "2009-09-29";

$time_original = strtotime($original_date);
$time_add      = $time_original + (3600*24); //add seconds of one day

$new_date      = date("Y-m-d", $time_add);

echo $new_date;

//New Issue

$stop_date = date('Y-m-d H:i:s', strtotime("2009-09-30 20:24:00") + 86400);

echo 'date after adding 1 day: '.$stop_date;

//add one day

date('Y-m-d', strtotime('+1 day', strtotime($date)))

?>