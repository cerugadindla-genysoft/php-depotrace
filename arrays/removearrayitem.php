<?php  
// remove array item
$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 1);
var_dump($cars);echo"---1 remove the second  array item";
echo"<br>";

// remove multiple arrays
$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 2);
var_dump($cars);echo "---2 remove multiple array items";
echo "<br>";

// remove item from associative array
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
unset($cars["model"]);
var_dump($cars);echo "---3 remove item from associative array";
echo "<br>";

// using the array difference function
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$newarray = array_diff($cars, ["Mustang", 1964]);
var_dump($newarray);echo"---4 the brand array will return";
echo "<br>";

// remove last item
$cars = array("Volvo", "BMW", "Toyota");
array_pop($cars);
var_dump($cars);echo "---5 remove the last item of array";
echo "<br>";

// remove first item
$cars = array("Volvo", "BMW", "Toyota");
array_shift($cars);
var_dump($cars);echo "---6 remove the first item of array";
echo "<br>";
 ?>  