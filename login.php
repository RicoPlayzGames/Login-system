<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <form class="login-box" action="login_process.php" method="POST">
        <h2>Login</h2>

        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>

        <button type="submit">Login</button>

        <p style="margin-top: 10px; font-size:14px;">
            Don't have an account? <a href="register.php" style="color:#007bff;">Register</a>
        </p>
    </form>
</div>

</body>
</html>
