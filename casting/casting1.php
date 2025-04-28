<pre>
<?php
// cast to string

$a = 5;       
$b = 5.34;    
$c = "hello"; 
$d = true;    
$e = NULL;    

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

var_dump(($a));echo" ---returns integer datatype <br>";
var_dump(($b));echo" ---returns float datatype <br>";
var_dump(($c));echo" ---returns string datatype <br>";
var_dump(($d));echo" ---returns boolean datatype <br>";
var_dump(($e));echo" ---returns null datatype <br>";

?>
</pre>

