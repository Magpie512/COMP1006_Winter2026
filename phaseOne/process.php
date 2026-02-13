<?php
require 'includes/connect.php';

$action = $_POST['action'] ?? '';
$id = $_POST['id'] ?? null;
$content = $_POST['content'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($action === 'create' && !empty($content)) {
        // 
        $stmt = $pdo->prepare("INSERT INTO posts (content) VALUES (?)");
        $stmt->execute([$content]);
    } 
    
    elseif ($action === 'edit' && $id && !empty($content)) {
        // Still busted
        $stmt = $pdo->prepare("UPDATE posts SET content = ?, updated_at = CURRENT_TIMESTAMP WHERE id = ?");
        $stmt->execute([$content, $id]);
    } 
    
    elseif ($action === 'delete' && $id) {
        $stmt = $pdo->prepare("DELETE FROM posts WHERE id = ?");
        $stmt->execute([$id]);
    }

    header("Location: index.php");
    exit;
}