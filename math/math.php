<?php
// php math functions

// pi function

echo(pi());echo" --- returns the value of pi";
echo"<br>";

// max and min 

echo(min(0,56,734,-35,-200));echo" ---returns minimum value";
echo"<br>";
echo(max(0,329,156,-30,-300));echo" ---returns maximum value";
echo"<br>";

// absolute

echo(abs(-86.9));echo" ---returns the positive value of a num";
echo"<br>";

// squareroot

echo(sqrt(64));echo" ---returns square of a number";
echo"<br>";

// round

echo(round(0.58));echo" ---rounds a floating num to its nearest value";
echo"<br>";
echo(round(0.49));echo" ---rounds a floating num to its nearest value";
echo"<br>";

// random

echo(rand());echo" ---returns any random number";


?>




<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Dummy user data 
    $valid_email = "chandana@gmail.com";
    $valid_password = "password123";

    if ($email === $valid_email && $password === $valid_password) {
        $_SESSION['user'] = $email;
        header("Location: dashboard.php");
        exit();
    } else {
        echo "<script>alert('Invalid email or password!'); window.location.href='task.html';</script>";
    }
}
?>


               
        

