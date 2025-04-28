<?php
$x = 100;  
$y = 50;

if ($x == 100 and $y == 50) {
    echo "Hello world!";echo"  1-----True if both x and y are true";
}
echo"<br>";


$x = 100;  
$y = 50;

if ($x == 100 or $y == 80) {
    echo "Hello world!";echo"	2----True if either $x or $y is true";
}
echo"<br>";

$x = 100;  
$y = 50;

if ($x == 100 xor $y == 80) {
    echo "Hello world!";echo"   3---True if either $x or $y is true, but not both";
}
echo"<br>";

$x = 100;  
$y = 50;

if ($x == 100 && $y == 50) {
    echo "Hello world!";echo"   4-----true if both $x and $y are true";
}
echo"<br>";

$x = 100;  
$y = 50;

if ($x == 100 || $y == 80) {
    echo "Hello world!";echo" 5-------True if either $x or $y is true";
}
echo"<br>";


$x = 100;  

if (!($x == 90)) {
    echo "Hello world!";echo" 6------True if $x is not true";
}
echo"<br>";




?>  
