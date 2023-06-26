<?php
$servername = "localhost";
$username = "root";
$password = "BoysVanBoven";
$dbname = "Signup_db";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    // Display a custom error message or perform any desired error handling
    echo "Connection failed: " . $conn->connect_error;
    // You can also log the error or redirect to an error page
    exit();
}

// Retrieve form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare and execute the SQL statement
$stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
if (!$stmt) {
    // Display a custom error message or perform any desired error handling
    echo "Prepare statement failed: " . $conn->error;
    // You can also log the error or redirect to an error page
    $conn->close();
    exit();
}
$stmt->bind_param("sss", $username, $email, $password);
$result = $stmt->execute();
if (!$result) {
    // Display a custom error message or perform any desired error handling
    echo "Execute statement failed: " . $stmt->error;
    // You can also log the error or redirect to an error page
    $stmt->close();
    $conn->close();
    exit();
}

// Close the statement and the database connection
$stmt->close();
$conn->close();

// Redirect to a success page
header("Location: success.html");
exit();
