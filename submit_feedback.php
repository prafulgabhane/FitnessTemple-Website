<?php
// Database connection parameters
$servername = "localhost";
$username = "root"; // Default XAMPP username
$password = ""; // Default XAMPP password
$dbname = "feedback_db";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); // Display connection error
}

// Collect form data from POST request
$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Insert data into the feedback table
$sql = "INSERT INTO feedback (name, phone, message) VALUES ('$name', '$phone', '$message')";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Feedback Submitted</title> <!-- Page title -->
    <link rel="stylesheet" href="css/style.css"> <!-- External CSS for consistent design -->
</head>
<body>
    <!-- Main content section for displaying feedback submission status -->
    <main>
        <?php
        if ($conn->query($sql) === TRUE) {
            // Success message
            echo "<h2>Thank you for your feedback!</h2>";
            echo "<p>Your feedback has been submitted successfully. We appreciate your input.</p>";
        } else {
            // Error message
            echo "<h2>Error submitting feedback</h2>";
            echo "<p>There was an error while submitting your feedback. Please try again later.</p>";
            echo "<p>Error details: " . $conn->error . "</p>"; // Error details for debugging
        }

        // Close the database connection
        $conn->close();
        ?>

        <!-- Navigation links aligned to the left below the success message -->
        <nav style="text-align: left;"> <!-- Align the nav to the left -->
            <a href="index.html">Home</a> <!-- Home link -->
            <a href="feedback.html">Submit Another Feedback</a> <!-- Link to submit another feedback -->
        </nav>
    </main>

    <!-- Footer section -->
    <footer>
        &copy; 2024 Fitness Temple. All rights reserved. <!-- Footer content -->
    </footer>
</body>
</html>
