<?php  
// single or doublequotes
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
echo $cars["model"];
echo "<br>";
echo $cars['model'];echo"---1 get the output either in single or double quotes";echo"<br>";

// execute a function item
function myFunction() {
    echo "I come from a function!";
  }
  
  $myArr = array("Volvo", 15, myFunction());
  
  $myArr[2];echo"---2 return the function";
  echo"<br>";

// loop through  associative array
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

foreach ($car as $x => $y) {
  echo "$x: $y <br>";
}
// loop through indexed array
$cars = array("Volvo", "BMW", "Toyota"); 

foreach ($cars as $x) {
  echo "$x <br>";
}
  
?>  