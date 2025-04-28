<pre>
<?php  
// add array item

$fruits = array("Apple", "Banana", "Cherry");
$fruits[] = "Orange";

//Output the array:
var_dump($fruits);echo"---1 add array item";
echo"<br>";

// associative array
$cars = array("brand" => "Ford", "model" => "Mustang");
$cars["color"] = "Red";

//Output the array:
var_dump($cars);echo"---2 assigning key word";

// add multiple array
$fruits = array("Apple", "Banana", "Cherry");
array_push($fruits, "Orange", "Kiwi", "Lemon");

//Output the array:
var_dump($fruits);echo "----3 adding multiple array";

// add muliple array to associative array
$cars = array("brand" => "Ford", "model" => "Mustang");
$cars += ["color" => "red", "year" => 1964];

//Output the array:
var_dump($cars);
?>
</pre>