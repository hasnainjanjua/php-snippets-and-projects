<?php
require '../db_connection.php';

$posts = [
    ['user_id' => 1, 'title' => 'First Post', 'content' => 'This is the content of the first post.'],
    ['user_id' => 1, 'title' => 'Second Post', 'content' => 'This is the content of the second post.'],
    ['user_id' => 2, 'title' => 'Another Post', 'content' => 'This is the content of another post.'],
];

foreach ($posts as $post) {
    try {
        $stmt = $pdo->prepare("INSERT INTO posts (user_id, title, content) VALUES (:user_id, :title, :content)");
        $stmt->execute($post);
        echo "Post " . $post['title'] . " inserted successfully.\n";
    } catch (PDOException $e) {
        echo "Error inserting post " . $post['title'] . ": " . $e->getMessage() . "\n";
    }
}
?>
