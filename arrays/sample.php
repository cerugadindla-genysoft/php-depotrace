<?php  
// function example:
function Volvo() {
  echo "This text comes from a function";echo"---calling the function";
}

// create array:
$myArr = array("Volvo", 15, ["apples", "bananas"], volvo());

// calling the function from the array item:
$myArr[3];
echo"<br>";

// count of array function
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);echo"----count of array function";
?>  