<?php
// date format of particular day
echo"  1---returns date in formant of particular day";echo"<br>";
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
// echo "Today is " . date("l");echo" 2--- returns day of particular date";
echo"<br>";



// time format
echo"  2--returns the time ";echo"<br>";
echo "The time is " . date("h:i:sa");   
echo"<br>";
echo"<br>";


// timezone 
echo" 3--returns the timezone";echo"<br>";
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");
echo"<br>";  
echo"<br>";  


// mk time
echo" 4---returns the mktime";echo"<br>";
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);   echo" 4---returns the mktime";
echo"<br>";
echo"<br>";



// string to date function
echo" 5---string to date funtion";echo"<br>";
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);
echo"<br>";
echo"<br>";



// string to date of different values
echo" 6---string to date of different values";echo"<br>";
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
echo"<br>";
echo"<br>";



// date example
echo" 7---returns next six saturdays";
$startdate=strtotime("Saturday");
$enddate=strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
}
echo"<br>";
echo"<br>";

echo" returns the days until the given value";echo"<br>";
$d1=strtotime("July 04");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until 4th of July.";
echo"<br>";
echo"<br>";

?>


<html>
<body>

© 2010-<?php echo date("Y");?>

</body>
</html>





