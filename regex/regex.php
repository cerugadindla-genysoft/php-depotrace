<?php
// using preg_match
$str = "Visit W3Schools";
$pattern = "/w3schools/i";
echo preg_match($pattern, $str);echo"  1 --- returns the function  whether a string contains matches of a pattern.";
echo"<br>";

// using preg_match_all
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str);echo"  2--- returns the function  how many matches were found for a pattern in a string.";
echo"<br>";

// using preg_replace
$str = "Visit Microsoft!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "W3Schools", $str);echo"  3--- this function will replace all of the matches of the pattern in a string with another string.";
echo"<br>";

// grouping
$str = "Apples and bananas.";
$pattern = "/ba(na){2}/i";
echo preg_match($pattern, $str);echo" 4--- this function is used to select parts of the pattern to be used as a match.";
?>