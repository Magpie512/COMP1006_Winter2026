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
        make it easier to understand, maintainm, and something something scale better

        SO we need more files!
    */

$items = ["Home", "About", "Contact"];

?>

<!DOCTYPE html>
<html>
<head>
    <title>My PHP Page</title>
</head>
<body>

<h1>Welcome</h1>

<ul>
<?php foreach ($items as $item): ?>
    <li><?= $item ?></li>
<?php endforeach; ?>
</ul>

<footer>
    <p>&copy; 2026</p>
</footer>

</body>
</html>
