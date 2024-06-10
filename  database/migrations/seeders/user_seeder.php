<?php
require '../db_connection.php';

$users = [
    ['email' => 'user1@example.com', 'password' => password_hash('password1', PASSWORD_BCRYPT)],
    ['email' => 'user2@example.com', 'password' => password_hash('password2', PASSWORD_BCRYPT)],
    ['email' => 'user3@example.com', 'password' => password_hash('password3', PASSWORD_BCRYPT)],
];

foreach ($users as $user) {
    try {
        $stmt = $pdo->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");
        $stmt->execute($user);
        echo "User " . $user['email'] . " inserted successfully.\n";
    } catch (PDOException $e) {
        echo "Error inserting user " . $user['email'] . ": " . $e->getMessage() . "\n";
    }
}
?>
