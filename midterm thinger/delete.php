<?php

require 'connect.php';

//Deletion of le review
$reviewId = $_GET['id'] ?? null;
$sql = "DELETE FROM reviews WHERE review_id = :review_id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':review_id', $reviewId);
$stmt->execute();

// Redirect back to admin page
header("Location: admin.php");