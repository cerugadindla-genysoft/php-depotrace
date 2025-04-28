<?php
// string length

echo strlen(" hello world"); echo"        ---returns the length of the string";
echo "<br>";

// string position
echo strpos("hello world!","world!"); echo"      ---search specific text within a string";
echo "<br>";


// uppercase
$x="hello world";
echo strtoupper($x);echo"     ---returns the string in upper case";
echo "<br>";


// lowercase
$y=" HELLO WORLD ";
echo strtolower($y);echo"      ---returns the string in lower case";
echo "<br>";


// replace string
$z="chandana hello";
echo str_replace("hello","dolly",$z);echo"     --replaces the character hello by dolly";
echo "<br>";


// reverse string
$b="laptop";
echo strrev($b);echo"    ---reverse a string";
echo "<br>";


// remove white space
$q="  software engineer  ";
echo trim($q);echo"    ---- removes white space from the beginning or ending";
echo "<br>";


// convert string into array
$u="hii chandana";
$v=explode("hii",$u);
print_r($v);echo"     ----convert string into an array";
echo"<br>";


// hello world without space count
$s="hello world";
$c=str_replace(" ","",$s);
$l=strlen($c);
echo"$l"; echo"    ---string count without space";
echo "<br>";


// hello world without space using substring
$x="hello world";
$y=substr($x,1);
$z=strlen($y);
echo"$z"; echo"   ---string count without space";
echo"<br>";


// string length using substringcount
$x="hello world";
$y=strlen($x);
$z=substr_count($x," ");
echo"$z";
$c=substr("$z",1);
$d=strlen($c);
echo"$d"; echo"  --string length  with substring count";




?>