<?php
$servername = "localhost";
$username = "root";
$password = "BoysVanBoven";
$dbname = "SkyHigh";

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
$stmt = $conn->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
$stmt->bind_param("ss", $username, $username);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user && password_verify($password, $user['password'])) {
    // User is authenticated
    session_start();
    $_SESSION['username'] = $user['username'];
    header("Location: dashboard.php");
    exit();
} else {
    echo "Invalid username/email or password.";
}

// Close the statement and the database connection
$stmt->close();
$conn->close();
?>
