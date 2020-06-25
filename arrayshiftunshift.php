<?php
$array1 = ["a","1","b","2","c","3","d","4","e"];

array_shift($array1);

echo "<pre>";
print_r($array1);
echo "</pre>";

array_unshift($array1,"rokib");
echo "<pre>";
print_r($array1);
echo "</pre>";


?>