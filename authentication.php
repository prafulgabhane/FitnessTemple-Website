<!-- authentication.php -->
<?php
session_start();

// Hardcoded credentials for demonstration purposes
$admin_username = "admin";
$admin_password = "admin"; // In practice, always use hashed passwords

// Get form data
$username = $_POST['username'];
$password = $_POST['password'];

// Validate credentials
if ($username === $admin_username && $password === $admin_password) {
    $_SESSION['admin_logged_in'] = true;
    header("Location: admin.php");
    exit;
} else {
    echo "Invalid login credentials. <a href='login.php'>Try again</a>.";
}
?>
