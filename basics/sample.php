
<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="task.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</head>
<body>


    
    <div class="container">
        <!-- Left Section -->
        <div class="left-section">
            <div class="overlay"></div>
        </div>
        
        <!-- Right Section (Login Form) -->
        <div class="right-section">
            <div class="login-box">
                <img src="./depotracelogo.png" alt="Logo" class="logo">
                <h4>Enter your login credentials here</h4>

               
                
                <form>
                    <div class="input-group">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" placeholder="Email" class="inputvalues" required>
                    </div>
                    
                    <div class="input-group password-group">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" placeholder="Password" class="inputvalues" required>
                        <i class="fa-solid fa-eye" onclick="togglePassword()"></i>
                    </div>
                    
                    <div class="remember-me">
                        <input type="checkbox" id="remember">
                        <label for="remember">Remember Me</label>
                    </div>
                    
                    <div class="login-actions">
                        <button type="submit" class="login-btn">Login</button>
                        <a href="#" class="forgot-password">Forgot Password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <footer>
        <div class="social-icons">
            <i class="fa-brands fa-square-facebook"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
        </div>
        <a href="#" class="privacy-policy">Privacy Policy</a>
        <div class="copyright"><h4>&copy; 2023 All rights reserved </h4></div>
    </footer>
    
    <script>
    function togglePassword() {
    const passwordInput = document.querySelector('.password-group input');
    const eyeIcon = document.querySelector('.password-group i.fa-solid');

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        eyeIcon.classList.replace("fa-eye", "fa-eye-slash");
    } else {
        passwordInput.type = "password";
        eyeIcon.classList.replace("fa-eye-slash", "fa-eye");
    }
}


    </script>
</body>
</html>


CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);
INSERT INTO users (email, password) 
VALUES ('chandana@gmail.com', SHA2('password123', 256));



  
<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "depotrace-login";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash the input password with SHA2 (256-bit) to match the DB
    $hashedPassword = hash("sha256", $password);

    // Prepare the SQL statement to avoid SQL injection
    $sql = "SELECT * FROM users WHERE email = ? AND password = ?";

    // Prepare the statement
    $stmt = $conn->prepare($sql);
    
    if ($stmt === false) {
        die('MySQL prepare failed: ' . $conn->error);
    }

    // Bind the parameters and execute the statement
    $stmt->bind_param("ss", $email, $hashedPassword);
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Check if user exists
    if ($result->num_rows === 1) {
        $_SESSION['email'] = $email; // Store session
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid email or password.";
    }
}
?>








