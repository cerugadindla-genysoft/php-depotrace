
<?php
// associative array
$cars[5] = "Volvo";
$cars[7] = "BMW";
$cars[14] = "Toyota";

array_push($cars, "Ford");
var_dump($cars);echo"---1 using the key names in array";
echo"<br>";

// access array
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
echo $car["model"];echo"----2 display the model of the car ";
echo"<br>";

// change value
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
$car["year"] = 2024;
var_dump($car);echo "----3 changes the value";
echo"<br>";

// loop through an associative array
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

foreach ($car as $x => $y) {
  echo "$x: $y <br>";
}
?>
