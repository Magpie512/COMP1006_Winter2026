<?php require "connect.php"; 
//if data is invalid, display throw error and exit the post man do 

$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
//validate title is required
if ($title === null || $title === '') {
    echo "Book title is required.";
    exit;
}

$author = filter_input(INPUT_POST, 'author', FILTER_SANITIZE_SPECIAL_CHARS);
if ($author === null || $author === '') {
    echo "Author is required.";
    exit;
}

$rating = filter_input(INPUT_POST, 'rating', FILTER_VALIDATE_INT);
if ($rating === null || $rating === '') {
    echo "Rating is required.";
    exit;
}

$review_text = filter_input(INPUT_POST, 'review_text', FILTER_SANITIZE_SPECIAL_CHARS);
if ($review_text === null || $review_text === '') {
    echo "Review text is required.";
    exit;
}

//insertion
$sql = "INSERT INTO reviews (title, author, rating, review_text) VALUES (:title, :author, :rating, :review_text)";  

$stmt = $pdo->prepare($sql);
$stmt->execute([ // PARA-METER "This is not a netflix movie" god wayne you scare me even when im in another class
    ':title' => $title,
    ':author' => $author,
    ':rating' => $rating,
    ':review_text' => $review_text
]);

?>
