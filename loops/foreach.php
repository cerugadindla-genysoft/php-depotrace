<?php
// for loop on arrays
$colors = array("red", "green", "blue", "yellow"); 
foreach ($colors as $x) {
  echo "$x <br>";;
}


echo"<br>";

// break statement
$colors=array("red","green", "blue","yellow");
foreach ($colors as $x) {
  if ($x=="blue") break;
  echo "$x <br>";
}

echo "<br>";

// continue statement
$colors=array("red","green", "blue", "yellow");
foreach ($colors as $x) {
  if ($x== "blue") continue;
  echo "$x <br>";
}
echo "<br>";

// foreach byref
$colors=array("red","green", "blue", "yellow");
foreach ($colors as $x) {
  if ($x== "blue") ;
}
echo "<br>";
var_dump($colors);

echo "<br>";

// assigning the array items by reference
$colors=array("red","green", "blue", "yellow");
foreach ($colors as &$x) {
  if($x=="blue") $x ="pink";
}
echo "<br>";
var_dump($colors);

echo "<br>";

// alternative syntax
$colors=array("red","green", "blue","yellow");
echo"<br>";
foreach ($colors as $x):
  echo"$x<br>";
  endforeach;
?>