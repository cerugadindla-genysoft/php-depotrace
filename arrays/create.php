 <pre>
<?php
// create an array 
$cars = ["Volvo", "BMW", "Toyota"];
var_dump($cars);echo"----1 create an array";
echo"<br>";

// multiple lines
$cars = [
    "Volvo",
    "BMW",
    "Toyota"
];
  var_dump($cars);echo "---2 creating array in multiple lines";
  echo"<br>";

//   trailing comma
$cars = [
    "Volvo",
    "BMW",
    "Toyota",
];
  var_dump($cars);echo"---3 placing commas to the array item";
  echo"<br>";

//   array keys
$cars = [
    0 => "Volvo",
    1 => "BMW",
    2 =>"Toyota"
  ];
  
  var_dump($cars);echo"----4 assigning array keys";
  echo"<br>";

//   declare empty array
$cars = [];
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

var_dump($cars);echo "----5 it declares the value in empty array";
echo"<br>";

// mixing array keys
$myArr = [];
$myArr[0] = "apples";
$myArr[1] = "bananas";
$myArr["fruit"] = "cherries";

var_dump($myArr);echo "-----6 mixing the array keys";
?> 
</pre>