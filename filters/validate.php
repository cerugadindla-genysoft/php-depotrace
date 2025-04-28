<?php
// filter_var ----checks only single variable
// email
$email = "test@example.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Valid email";
} else {
    echo "Invalid email";
}

echo"<br>";
echo"<br>";

// integer
$number = "123";
if (filter_var($number, FILTER_VALIDATE_INT)) {
    echo "Valid integer";
} else {
    echo "Invalid integer";
}

echo"<br>";
echo"<br>";

// boolean
$boolValue = "true";
if (filter_var($boolValue, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE) !== null) {
    echo "Valid boolean";
} else {
    echo "Invalid boolean";
}
echo"<br>";
echo"<br>";

// float
$floatValue = "12.34";
if (filter_var($floatValue, FILTER_VALIDATE_FLOAT)) {
    echo "Valid float";
} else {
    echo "Invalid float";
}
echo"<br>";
echo"<br>";

// url
$url = "https://www.example.com";
if (filter_var($url, FILTER_VALIDATE_URL)) {
    echo "Valid URL";
} else {
    echo "Invalid URL";
}
echo"<br>";
echo"<br>";

// ip address
$ipv6 = "2001:db8::ff00:42:8329";
if (filter_var($ipv6, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
    echo "Valid IPv6";
} else {
    echo "Invalid IPv6";
}
echo"<br>";
echo"<br>";

// sanatize and validate
$email = "john.doe@example.com";

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo("$email is a valid email address");
} else {
  echo("$email is not a valid email address");
}




?>