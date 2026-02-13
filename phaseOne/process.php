<?php
require_once '/includes/connect.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$message = trim($_POST['PostContent'] ?? '');

if ($message === '') {
    header('Location: index.php?status=empty');
    exit;
}

if (mb_strlen($message) > 500) {
    header('Location: index.php?status=toolong');
    exit;
}

$sql = "INSERT INTO blog_posts (message) VALUES (:message)";
$stmt = $pdo->prepare($sql);
$stmt->execute([':message' => $message]);

header('Location: index.php?status=posted');
exit;