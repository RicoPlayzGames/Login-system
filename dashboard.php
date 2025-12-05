<?php
session_start();

// Protect page: redirect if user is not logged in
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit;
}

// Get username from session
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Dashboard-specific styling */
        .dashboard-box {
            background: #1e1e1e;
            padding: 35px;
            width: 380px;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(255,255,255,0.08);
            text-align: center;
        }

        .dashboard-box h2 {
            font-size: 26px;
            margin-bottom: 10px;
        }

        .username {
            font-size: 18px;
            margin-bottom: 20px;
            opacity: 0.8;
        }

        .logout-btn {
            display: inline-block;
            width: 100%;
            padding: 12px;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.2s;
        }

        .logout-btn:hover {
            background: #005fcc;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="dashboard-box">
        <h2>Dashboard</h2>
        <p class="username">Welcome, <strong><?php echo htmlspecialchars($username); ?></strong></p>

        <a href="logout.php"><button class="logout-btn">Logout</button></a>
    </div>
</div>

</body>
</html>
