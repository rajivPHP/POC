<?php

//remove a value from array by unset function
$array = array("1", "2", "3", "one", "5");
unset($array[2]);
var_dump($array);

//Remove a Value from array using array_splice function
$array2 = array("1" => "key", "2" => "value", "3" => "Master", "4" => "From");
array_splice($array2, 3, 1);
var_dump($array2);

//find the array key using array search and unset the value
$list = array("apple", "orange", "strawberry", "lemon", "banana");
$delete_val = array("orange", "lemon", "banana");
foreach ($delete_val as $key) {
	$setDelete = array_search($key, $list);
	unset($list[$setDelete]);
}
var_dump($list);

//removes First Element from Array
$list2 = array("apple", "orange", "strawberry", "lemon", "banana");
array_shift($list2);
echo "<pre>";
print_r($list2);

//Removes last Element From Array
$list3 = array("apple", "orange", "strawberry", "lemon", "banana");
array_pop($list3);
echo "<pre>";
print_r($list3);

//Converts array as Javascript Object Notation
$tennisArray = array('Djokovic' => 1, 'Federer' => 2, 'Nadal' => 3, 'Murray' => 4);
echo json_encode($tennisArray);
var_dump($tennisArray);
?>

