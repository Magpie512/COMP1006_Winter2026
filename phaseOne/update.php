<?php
require_once __DIR__ . '/includes/connect.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
if (!$id) {
    header('Location: index.php?status=invalidid');
    exit;
}

$message = trim($_POST['PostContent'] ?? '');
if ($message === '') {
    header('Location: edit_post.php?id=' . $id . '&status=empty');
    exit;
}
if (mb_strlen($message) > 500) {
    header('Location: edit_post.php?id=' . $id . '&status=toolong');
    exit;
}

$stmt = $pdo->prepare("UPDATE blog_posts SET message = :message WHERE id = :id");
$stmt->execute([
    ':message' => $message,
    ':id' => $id
]);

header('Location: index.php?status=updated');
exit;