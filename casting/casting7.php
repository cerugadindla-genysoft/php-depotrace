<pre>
<?php
// cast to null

$a = 5;       
$b = 5.34;    
$c = "hello"; 
$d = true;    
$e = NULL;    

$a = (unset) $a;
$b = (unset) $b;
$c = (unset) $c;
$d = (unset) $d;
$e = (unset) $e;


var_dump(($a));echo" ---returns integer datatype <br>";
var_dump(($b));echo" ---returns float datatype <br>";
var_dump(($c));echo" ---returns string datatype <br>";
var_dump(($d));echo" ---returns boolean datatype <br>";
var_dump(($e));echo" ---returns null datatype <br>";

?>
</pre>
