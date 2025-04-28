<?php

// comparision 

$x = 100;  
$y = "100";
var_dump($x == $y); echo" 1-------if both the values are same the output is true";
echo"<br>";



$x = 100;  
$y = "100";
var_dump($x === $y);echo" 2-------returns false if both the values are not equal";
echo "<br>";

$x = 100;  
$y = "100";
var_dump($x != $y);echo" 3-----returns false if the values are equal";
echo "<br>";

$x = 100;  
$y = "50";
var_dump($x <> $y);echo" 4-----returns true if the values are equal";
echo "<br>";

$x = 100;  
$y = "100";
var_dump($x !==$y);echo"5------returns true if they are not same type";
echo "<br>";

$x = 100;  
$y = "50";
var_dump($x > $y);echo"6-----returns ture x is greater than y";
echo "<br>";

$x = 100;  
$y = "50";
var_dump($x < $y);echo" 7----returns true if x is less than y";
echo "<br>";

$x = 100;  
$y = "50";
var_dump($x >= $y);echo " 8----returns true if x is greater than y";
echo "<br>";

$x = 100;  
$y = "50";
var_dump($x <= $y);echo" 9----returns false if x is greater than y";
echo "<br>";

$x = 5;  
$y = 10;

echo ($x <=> $y); echo" 10----returns -1 because x is less than y"; 
echo "<br>";

$x = 10;  
$y = 10;

echo ($x <=> $y); echo" 11----returns 0 because values are equal";
echo "<br>";

$x = 15;  
$y = 10;

echo ($x <=> $y); echo" 12----returns +1 because x is greater than y";
echo "<br>";

?>