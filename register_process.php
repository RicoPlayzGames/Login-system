<?php
session_start();
require 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];

// Check if username already exists
$check = $conn->prepare("SELECT id FROM users WHERE username = ?");
$check->bind_param("s", $username);
$check->execute();
$check->store_result();

if ($check->num_rows > 0) {
    echo "Username already exists.";
    exit;
}
$check->close();

// Hash the password
$hashed = password_hash($password, PASSWORD_DEFAULT);

// Insert new user into database
$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $hashed);

if ($stmt->execute()) {
    echo "Account created. <a href='login.php'>Login here</a>";
} else {
    echo "Error creating account.";
}

$stmt->close();
$conn->close();
?>
