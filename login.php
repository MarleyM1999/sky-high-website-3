<?php
$servername = "localhost";
$username = "root";
$password = "BoysVanBoven";
$dbname = "Signup_db";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

// Prepare and execute the SQL statement
$stmt = $conn->prepare("SELECT * FROM users WHERE (username = ? OR email = ?) AND password = ?");
$stmt->bind_param("sss", $username, $username, $password);
$stmt->execute();

// Get the result
$result = $stmt->get_result();

// Check if the user is authenticated
if ($result->num_rows === 1) {
    // User is authenticated
    // Start a session and set session variables
    session_start();
    $_SESSION['username'] = $username;
    
    // Redirect to the dashboard or protected page
    header("Location: dashboard.php");
    exit();
} else {
    // User is not authenticated
    echo "Invalid username/email or password.";
}

// Close the statement and the database connection
$stmt->close();
$conn->close();
?>
