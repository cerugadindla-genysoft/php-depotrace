<?php
// calling with same function name
function my_callback($item) {
  return strlen($item);
}

$fruits = ["apple", "orange", "banana", "coconut"];
$lengths = array_map("my_callback", $fruits);
print_r($lengths);
echo"<br>";
echo"<br>";

// calling with direct function name
$colors = ["pink", "red", "green", "gold"];
$lengths = array_map( function($item) { return strlen($item); } , $colors);
print_r($lengths);
echo"<br>";
echo"<br>";

// user defined functions
function exclaim($str) {
    return $str . "! ";
  }
  
  function ask($str) {
    return $str . "? ";
  }
  
  function printFormatted($str, $format) {
    // Calling the $format callback function
    echo $format($str);
  }
  
  // Pass "exclaim" and "ask" as callback functions to printFormatted()
  printFormatted("Hello world", "exclaim");
  printFormatted("Hello world", "ask");
?>