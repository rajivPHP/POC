`<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 14/9/15
 * Time: 7:02 PM
 */
$array=array(1,5,2,6,8,7);
$count=count($array);
for($i=0;$i<$count;$i++)
{
    echo $array[$i];
}
for($i=0;$i<$count;$i++)
{
    for($j=0;$j<$count;$j++)
    {
        if($array[$i]< $array[$j])
        {
            $temp=$array[$i];
            $array[$i]=$array[$j];
            $array[$j]=$temp;
        }
    }
}

echo "Numbers after sort: ";
for( $i = 0; $i < $count; $i++ ) {
    echo $array[$i];
}
?>

<?php
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
$count=count($numbers);
for($i=0;$i<$count;$i++)
{
    echo $numbers[$i];
    echo "<br>";
}

?>

<?php
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);
?>

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
?>

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);
?>

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);

//mysql
$sql="SELECT pet.id, pet.name, pet.age, pet.dead
    FROM pet, person_pet, person
    WHERE
    pet.id = person_pet.pet_id AND
    person_pet.person_id = person.id AND
    person.first_name = 'Zed'";
?>
