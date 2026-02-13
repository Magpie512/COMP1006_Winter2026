<?php
require_once '/includes/header.php';
require_once '/includes/connect.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if (!$id) {
    header('Location: index.php?status=invalidid');
    exit;
}

$stmt = $pdo->prepare("SELECT id, message FROM blog_posts WHERE id = :id");
$stmt->execute([':id' => $id]);
$post = $stmt->fetch();

if (!$post) {
    header('Location: index.php?status=notfound');
    exit;
}
?>

<section class="body">
    <div id="CreatePostsContainer">
        <h2>Edit Post #<?= (int)$post['id'] ?></h2>

        <?php if (isset($_GET['status']) && $_GET['status'] === 'empty'): ?>
            <p class="text-danger">Post cannot be empty.</p>
        <?php elseif (isset($_GET['status']) && $_GET['status'] === 'toolong'): ?>
            <p class="text-danger">Post is too long (max 500 chars).</p>
        <?php endif; ?>

        <form action="update_post.php" method="post">
            <input type="hidden" name="id" value="<?= (int)$post['id'] ?>">
            <label for="PostContent">Your Post:</label>
            <textarea id="PostContent" name="PostContent" rows="4" cols="50" maxlength="500"><?= htmlspecialchars($post['message']) ?></textarea>
            <br>
            <input type="submit" value="Save Changes">
            <a href="index.php">Cancel</a>
        </form>
    </div>
</section>

<?php require_once '/includes/footer.php'; ?>