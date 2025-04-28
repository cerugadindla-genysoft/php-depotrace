<?php
function myMessage() {
  echo "Hello world!";echo"-------calling the function";
}

myMessage();
?> 


<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Debugging: Print the POST data
    echo "<pre>";
    print_r($_POST); // Shows the email and password posted
    echo "</pre>";

    // Check if email and password are set in POST
    if (!isset($_POST['email']) || !isset($_POST['password'])) {
        // die("Error: Email or password is missing.");
    }

    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Dummy user data (Replace with actual database data in the future)
    $valid_email = "chandana@gmail.com";
    $valid_password = "password123";

    if ($email === $valid_email && $password === $valid_password) {
        session_regenerate_id(true); // Security measure
        $_SESSION['user'] = $email;

        // Redirect to dashboard
        header("Location: dashboard.php");
        exit();
    } else {
        // Invalid credentials
        echo "<script>alert('Invalid email or password!'); window.location.href='task.html';</script>";
        exit();
    }
} else {
    die("Error: Invalid request method.");
}
?>
