<?php
require_once '/includes/connect.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
if (!$id) {
    header('Location: index.php?status=invalidid');
    exit;
}

$stmt = $pdo->prepare("DELETE FROM blog_posts WHERE id = :id");
$stmt->execute([':id' => $id]);

if ($stmt->rowCount() > 0) {
    header('Location: index.php?status=deleted');
} else {
    header('Location: index.php?status=notfound');
}
exit;