<?php
require '../db_connection.php';

try {
    $sql = "CREATE TABLE posts (
        id INT AUTO_INCREMENT PRIMARY KEY,
        user_id INT NOT NULL,
        title VARCHAR(255) NOT NULL,
        content TEXT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (user_id) REFERENCES users(id)
    )";
    $pdo->exec($sql);
    echo "Posts table created successfully.";
} catch (PDOException $e) {
    echo "Error creating posts table: " . $e->getMessage();
}
?>
