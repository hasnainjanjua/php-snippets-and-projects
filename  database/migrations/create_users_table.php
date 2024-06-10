<?php
require '../db_connection.php';

try {
    $sql = "CREATE TABLE users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(255) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    $pdo->exec($sql);
    echo "Users table created successfully.";
} catch (PDOException $e) {
    echo "Error creating users table: " . $e->getMessage();
}
?>
