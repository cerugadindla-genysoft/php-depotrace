<?php
// indexed array 
$cars = array("Volvo", "BMW", "Toyota"); 
var_dump($cars);echo"----1  indexed array ";
echo "<br>";

// access indexed array
$cars = array("Volvo", "BMW", "Toyota"); 
echo $cars[0];echo"----2 counts the array value";
echo "<br>";

// change value
$cars = array("Volvo", "BMW", "Toyota"); 
$cars[1] = "Ford";
var_dump($cars);echo"---3 change the values of array item 1";
echo "<br>";

// loop through an array
$cars = array("Volvo", "BMW", "Toyota"); 

foreach ($cars as $x) {
  echo "$x <br>";
}

// index number
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

array_push($cars, "Ford");
var_dump($cars);echo "----4 new item added to the array";
echo"<br>";
?>
