<!-- login.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fitness Temple - Admin Login</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Link to the external stylesheet -->
</head>
<body>
    <!-- Header section -->
    <header>
        <h1>Admin Login - Fitness Temple</h1> <!-- Main heading -->
    </header>

    <!-- Navigation bar with Home button -->
    <nav>
        <a href="index.html">Home</a> <!-- Home link -->
        <a href="about.html">About Us</a> <!-- About Us link -->
        <a href="gallery.html">Gallery</a> <!-- Gallery link -->
        <a href="contact.html">Contact Us</a> <!-- Contact Us link -->
        <a href="feedback.html">Feedback</a> <!-- Feedback link -->
        <a href="logout.php">Logout</a> <!-- Logout link -->
    </nav>

    <!-- Main content section -->
    <main>
        <h2>Admin Login</h2> <!-- Heading for the login section -->
        <form action="authentication.php" method="post"> <!-- Form for admin login -->
            <label for="username">Username:</label> <!-- Username label -->
            <input type="text" id="username" name="username" required> <!-- Username input -->
            <br><br>

            <label for="password">Password:</label> <!-- Password label -->
            <input type="password" id="password" name="password" required> <!-- Password input -->
            <br><br>

            <button type="submit">Login</button> <!-- Submit button -->
        </form>
    </main>

    <!-- Footer section -->
    <footer>
        &copy; 2024 Fitness Temple. All rights reserved. <!-- Footer content -->
    </footer>
</body>
</html>
