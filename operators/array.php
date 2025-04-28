<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");
print_r($x + $y); echo"  1--- union of x and y";
echo"<br>";


$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
var_dump($x == $y); echo "2----Returns true if x and y have the same value pairs";
echo"<br>";

$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
var_dump($x === $y); echo" 3----Returns true if x and y have the same value pairs in the same order and of the same types";
echo"<br>";


$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
var_dump($x != $y);echo" 4----Returns true if x is not equal to y";
echo"<br>";

$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
var_dump($x <> $y);echo"5----Returns true if x is not equal to y";
echo"<br>";


$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
var_dump($x !== $y); echo"6----Returns true if x is not identical to y";
echo"<br>";

?> 