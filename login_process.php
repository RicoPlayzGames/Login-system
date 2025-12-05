<?php
session_start();
require 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];

// Prepare query to get user info
$stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows === 1) {
    $stmt->bind_result($id, $hashedPassword);
    $stmt->fetch();

    // Check if password is correct
    if ($hashedPassword !== null && password_verify($password, $hashedPassword)) {
        // ===== SESSION UPDATED =====
        $_SESSION['id'] = $id;
        $_SESSION['username'] = $username; // stores username for dashboard

        header("Location: dashboard.php");
        exit;
    } else {
        echo "Wrong password.";
    }
} else {
    echo "User not found.";
}

// Close statements and connection
$stmt->close();
$conn->close();