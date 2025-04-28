<?php
// example integer
$a = 5;
$b = 5.34;
$c = "25";

var_dump($a);echo" ---integer";
echo "<br>";
var_dump($b);echo" ---float";
echo "<br>";
var_dump($c);echo" ---number string";
echo"<br>";


// Check if the type of a variable is integer   
$x = 5985;
var_dump(is_int($x));echo" ---statement is true"; 

echo "<br>";

// Check again... 
$x = 59.85;
var_dump(is_int($x));echo" ---statement is false";
echo"<br>"; 


// floats


// Check if the type of a variable is float 
$x = 10.365;
var_dump(is_float($x));echo" ---statement is true";
echo"<br>";

// infinity

// Check if a numeric value is finite or infinite 
$x = 1.9e411;
var_dump($x);echo" ---infinite";
echo"<br>";

$y=1.98765;
var_dump($y);echo" ---finite";
echo"<br>";


// nan

// Invalid calculation will return a NaN value
$x = acos(8);
var_dump($x);echo" ---return nan value";
echo"<br>";


// numerical strings

// Check if the variable is numeric   
$x = 5985;
var_dump(is_numeric($x));echo" ---statement is true";

echo "<br>";

$x = "5985";
var_dump(is_numeric($x));echo" ---statement is true";

echo "<br>";

$x = "59.85" + 100;
var_dump(is_numeric($x));echo" ---statement is true";

echo "<br>";

$x = "Hello";
var_dump(is_numeric($x));echo" ---statement is false";
 





?> 
