<?php
$x="hello world";
echo substr($x,6,5);echo" ---no of characters to be return";
echo "<br>";

// slice to end

$a="hello chandana";
echo substr($a,6);echo" ---slicing to the end of 6 characters";
echo "<br>";



// slice from the end
$p="hello webpage";
echo substr($p,-5,3);echo" ---slice from the end of 3 characters";
echo "<br>";



// negative length
$g="hii, how are you?";
echo substr($g,5,-3);echo" ---start character is 5 and end character 3 in negative length";
echo "<br>";

?>