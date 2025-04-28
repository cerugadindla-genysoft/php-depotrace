<?php
// json encode
$data = [
  "name" => "chandana",
  "age" => 22,
  "skills" => ["PHP", "JS", "HTML"]
];

$json = json_encode($data);

echo $json;
echo"<br>";
echo"<br>";

// example
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
echo json_encode($age);
echo"<br>";
echo"<br>";

// json decode

$jsonString = '{"name":"Bob","age":25}';
$data = json_decode($jsonString, true); // `true` gives you an associative array
echo $jsonString; 
echo"<br>";
echo"<br>";

// without true--without associative array
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
var_dump(json_decode($jsonobj));echo"--without associative array (true)";
echo"<br>";
echo"<br>";

// with true---with associative array
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
var_dump(json_decode($jsonobj, true));echo"--with associative array(true)";
echo"<br>";
echo"<br>";

// accessing the decoded values
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$obj = json_decode($jsonobj);
echo $obj->Peter;
echo $obj->Ben;
echo $obj->Joe;echo"--accessing the decoded values without associative array";
echo"<br>";
echo"<br>";

// accessing the decoded values from associative array
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$arr = json_decode($jsonobj, true);
echo $arr["Peter"];
echo $arr["Ben"];
echo $arr["Joe"];echo"--with associative array(true)";

?>


