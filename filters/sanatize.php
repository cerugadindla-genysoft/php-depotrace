<?php
// email
$email = "user<>@example.com";
$sanitized_email = filter_var($email, FILTER_SANITIZE_EMAIL);
echo $sanitized_email; 
echo"<br>";
echo"<br>";

// string
$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;
echo"<br>";
echo"<br>";

// url
$url = "http://www.example.com/<script>alert('Hacked');</script>";
$sanitized_url = filter_var($url, FILTER_SANITIZE_URL);
echo $sanitized_url; 
echo"<br>";
echo"<br>";

// int
 $number = "Phone: +1-800-555-1234";
$sanitized_number = filter_var($number, FILTER_SANITIZE_NUMBER_INT);
echo $sanitized_number; 
echo"<br>";
echo"<br>";

// float
$price = "$1,234.56";
$sanitized_price = filter_var($price, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
echo $sanitized_price; 
echo"<br>";
echo"<br>";






