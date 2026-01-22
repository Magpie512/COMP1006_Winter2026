<?php
/* What's the Problem? 
    - PHP logic + HTML in one file
    - Works, but not scalable
    - Repetition will become a problem

    How can we refactor this code so it’s easier to maintain?
    Taking ideas from my whacky formatting during my web prac in the summer:
        I need to separate logic from presentation
        I need to avoid repetition
        I need to make it easy to update
        and
        make it easier to understand, maintain, and something something scale better

        SO we need more files!
    */
?>


<?php
// Logic/Data Section representing items to display in the nav menu
$items = ["Home", "About", "Contact"];

// Header Include
include('header.php'); 
?>

<ul>
    <?php foreach ($items as $item): ?>
        <li><?= htmlspecialchars($item) ?></li>
    <?php endforeach; ?>
</ul>

<?php include('footer.php'); ?>

<!-- God the dracula theme for php sucks this all looks like its incorrect but its not -->