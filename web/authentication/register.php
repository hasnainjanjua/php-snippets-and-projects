<?php
session_start();
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Check if the email is already registered
    $stmt = $pdo->prepare('SELECT * FROM users WHERE email = ?');
    $stmt->execute([$email]);
    if ($stmt->rowCount() > 0) {
        echo 'Email is already registered.';
    } else {
        // Insert new user into the database
        $stmt = $pdo->prepare('INSERT INTO users (email, password) VALUES (?, ?)');
        if ($stmt->execute([$email, $password])) {
            $_SESSION['user_id'] = $pdo->lastInsertId();
            header('Location: dashboard.php');
        } else {
            echo 'Error registering user.';
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
<h2>Register</h2>
<form method="POST" action="register.php">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br>
    <button type="submit">Register</button>
</form>
</body>
</html>
