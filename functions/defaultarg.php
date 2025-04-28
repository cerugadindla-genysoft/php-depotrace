<?php
echo"default arguments";echo"<br>";
// default arguments
function setHeight($minheight = 50) {
  echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight();
setHeight(135);
setHeight(80);
echo"<br>";

echo"returning the values";echo"<br>";
// returning values
function sum($x, $y) {
  $z = $x + $y;
  return $z;
}

echo "5 + 10 = " . sum(5,10) . "<br>";
echo "7 + 13 = " . sum(7,13) . "<br>";
echo "2 + 4 = " . sum(2,4)   ."<br>";
echo"<br>";

// passing arguments by reference
echo"passing arguments by reference";echo"<br>";
function add_five(&$value) {
    $value += 5;
  }
  
  $num = 2;
  add_five($num);
  echo $num;

  echo"<br>";

//   variable number of arguments
echo "variable number of arguments";echo "<br>";
function sumMyNumbers(...$x) {
    $n = 0;
    $len = count($x);
    for($i = 0; $i < $len; $i++) {
      $n += $x[$i];
    }
    return $n;
  }
  
  $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
  echo $a;
  
  echo "<br>";

//   family names
echo"2 example";echo"<br>";
function myFamily($lastname, ...$firstname) {
    $txt = "";
    $len = count($firstname);
    for($i = 0; $i < $len; $i++) {
      $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
    }
    return $txt;
  }
  
  $a = myFamily("Doe", "Jane", "John", "Joey");
  echo $a;
?>
