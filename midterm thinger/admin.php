<?php require "process.php" ?>
<!DOCTYPE html>
<html lang="en">
<header>
    <h1> Admin Pagerino</h1> <!-- can you tell im fatigued -->
</header>
<body>
    <!-- now this is for DB managment from the admin side -->

    <fieldset>
        <legend>Book Reviews</legend>

        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Rating</th>
                    <th>Review</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // fetchrs all reviews from the database for read
                $sql = "SELECT * FROM reviews";
                $stmt = $pdo->query($sql);
                $reviews = $stmt->fetchAll(PDO::FETCH_ASSOC); 
                foreach ($reviews as $review) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($review['title']) . "</td>";
                    echo "<td>" . htmlspecialchars($review['author']) . "</td>";
                    echo "<td>" . htmlspecialchars($review['rating']) . "</td>";
                    echo "<td>" . htmlspecialchars($review['review_text']) . "</td>";
                    echo "<td><a href='edit.php?id=" . $review['review_id'] . "'>Edit</a></td>"; // link to update review
                    echo "<td><a href='delete.php?id=" . $review['review_id'] . "'>Delete</a></td>"; // link to delete review
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </fieldset>
    
</body>
</html>