<?php  
$x = 75;
  
function myfunction() {
  global $x;
  echo $x;echo"--- as global inside a function";
}

myfunction()


?>  