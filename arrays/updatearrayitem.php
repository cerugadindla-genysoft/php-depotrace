<?php  
// update array item
$cars = array("Volvo", "BMW", "Toyota");
$cars[1] = "Ford";
var_dump($cars);echo"---1 update array item";
echo"<br>";

// update associative array
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$cars["year"] = 2024;
var_dump($cars);echo "---2 get the  array with a key word";
echo"<br>";

// update array -foreach loop
$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as &$x) {
  $x = "Ford";
}
unset($x);
var_dump($cars);echo "----3 for each loop";
echo"<br>";

// 
?>  