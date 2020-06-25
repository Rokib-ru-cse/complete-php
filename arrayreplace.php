<?php

$array1 = ['a','b','c','d','e','f','g'];
$array2 = ['1','2','3','4'];
$array3 = array_replace_recursive($array1,$array2);

echo "<pre>";
print_r($array3);
echo "</pre>";


?>