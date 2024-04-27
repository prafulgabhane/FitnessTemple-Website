<!-- admin.php -->
<?php
// Start session to manage admin authentication
session_start();

// Check if the admin is logged in; if not, redirect to the login page
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit;
}

// Database connection details
$servername = "localhost";
$username = "root"; // Default MySQL username
$password = ""; // Default MySQL password
$dbname = "feedback_db"; // Your database name

// Establish connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch feedback
$sql = "SELECT id, name, phone, message FROM feedback";
$result = $conn->query($sql);

// Check for query errors
if (!$result) {
    die("Error with SQL query: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - View Feedback</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Link to the external CSS -->
</head>
<body>
    <!-- Header section -->
    <header>
        <h1>Admin - View Feedback</h1> <!-- Main heading -->
    </header>

    <!-- Navigation bar with Home and Logout links -->
    <nav>
        <a href="index.html">Home</a> <!-- Home link -->
        <a href="logout.php">Logout</a> <!-- Logout link -->
    </nav>

    <!-- Main content area -->
    <main>
        <h2>Feedback from Users</h2> <!-- Heading for the feedback section -->

        <!-- Display feedback in a table -->
        <?php
        if ($result->num_rows > 0) {
            echo "<table border='1' style='width: 100%; text-align: center;'>";
            echo "<tr><th>ID</th><th>Name</th><th>Phone</th><th>Message</th></tr>"; // Table headers
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>"; // ID
                echo "<td>" . $row['name'] . "</td>"; // Name
                echo "<td>" . $row['phone'] . "</td>"; // Phone
                echo "<td>" . $row['message'] . "</td>"; // Message
                echo "</tr>";
            }
            echo "</table>"; // Close the table
        } else {
            echo "<p>No feedback found.</p>"; // Message if no feedback found
        }
        ?>
    </main>

    <!-- Footer section -->
    <footer>
        &copy; 2024 Fitness Temple. All rights reserved. <!-- Footer content -->
    </footer>
</body>
</html>
