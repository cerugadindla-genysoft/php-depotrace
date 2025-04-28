<?php
// for loop
for ($x = 0; $x < 10; $x++) {
    echo " the number is:$x  <br>";
}
echo"<br>";

// break statement
for ($x = 0; $x < 10; $x++){
if ($x == 3) break;
echo" the number is:$x  <br>";
}
echo"<br>";

// continue statement
for ($x = 0; $x < 10; $x++){
    if ($x == 3) continue;
    echo"the number is:$x  <br>";
}

?>