<?php
$a = 123;

echo "String Reverse"."  ".strrev($a)."  ";
while($a > 0) {
    $r = $a % 10;
    $rev = $rev * 10 + $r;
    $a = intval($a / 10);
}
echo "Reverse of digit is ".$rev;
?> 