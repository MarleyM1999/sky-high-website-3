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
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password

// Prepare and execute the SQL statement
$stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
if (!$stmt) {
    die("Prepare statement failed: " . $conn->error);
}
$stmt->bind_param("sss", $username, $email, $password);
if ($stmt->execute()) {
    // Redirect to a success page
    header("Location: success.html");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and the database connection
$stmt->close();
$conn->close();
?>
