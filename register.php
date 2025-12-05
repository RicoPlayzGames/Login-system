<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <form class="login-box" action="register_process.php" method="POST">
        <h2>Register</h2>

        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>

        <button type="submit">Register</button>

        <p style="margin-top: 10px; font-size:14px;">
            Already have an account? <a href="login.php" style="color:#007bff;">Login</a>
        </p>
    </form>
</div>

</body>
</html>
