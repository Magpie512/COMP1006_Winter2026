<?php
require 'includes/connect.php';

// We gather the intent of the user from the shadows of the POST request
$action = $_POST['action'] ?? '';
$id = $_POST['id'] ?? null;
$content = $_POST['content'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($action === 'create' && !empty($content)) {
        // Constructing a new post
        $stmt = $pdo->prepare("INSERT INTO posts (content) VALUES (?)");
        $stmt->execute([$content]);
    } 
    
    elseif ($action === 'edit' && $id && !empty($content)) {
        // Rewriting history
        $stmt = $pdo->prepare("UPDATE posts SET content = ?, updated_at = CURRENT_TIMESTAMP WHERE id = ?");
        $stmt->execute([$content, $id]);
    } 
    
    elseif ($action === 'delete' && $id) {
        // Erasing the record
        $stmt = $pdo->prepare("DELETE FROM posts WHERE id = ?");
        $stmt->execute([$id]);
    }

    // Return the user to the main gate once the work is finished
    header("Location: index.php");
    exit;
}