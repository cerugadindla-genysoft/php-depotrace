<?php
// dowhile loop
$i = 1;
do {
  echo $i;
  $i++;
} while ($i < 6);echo "      1--- iterates values from 1-5";
echo"<br>";

// example even if the condition is never true
$i = 8;
do {
  echo $i;
  $i++;
} while ($i < 6);echo "      2--- iterates values even if it is not true";
echo "<br>";

// break statement
$x=1;
do{
    if ($x==3)break;
    echo$x;
    $x++;
}while($x<6);echo "      3--- iterates values 1,2";
echo "<br>";

// continue statement
$x=0;
do{
    $x++;
    if ($x== 3)continue;
    echo $x;
}while($x< 6);echo "      4--- iterates values from 1-2 and 4-6";
?>