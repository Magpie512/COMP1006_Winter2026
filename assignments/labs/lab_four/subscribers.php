<?php
//TODO:
require "includes/connect.php";


//TODO:
//1. Write a SELECT query to get all subscribers
$sql = "SELECT id, first_name, last_name, email, subscribed_at 
        FROM subscribers
        ORDER BY subscribed_at DESC";
//2. Add ORDER BY subscribed_at DESC
// 3. Prepare the statement
$stmt = $pdo->prepare($sql);
// 4. Execute the statement
$stmt->execute();
// 5. Fetch all results into $subscribers
$subscribers = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<main class="container mt-4">
  <h1>Subscribers</h1>

  <?php if (count($subscribers) === 0): ?>
    <p>No subscribers yet.</p>
  <?php else: ?>
    <table class="table table-bordered mt-3">
      <thead>
        <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Subscribed</th>
        </tr>
      </thead>
      <tbody>
        <!-- TODO: Loop through $subscribers and output each row -->
        <?php foreach ($subscribers as $sub): ?>
          <tr>
            <td><?php echo htmlspecialchars($sub['id']); ?></td>
            <td><?php echo htmlspecialchars($sub['first_name']); ?></td>
            <td><?php echo htmlspecialchars($sub['last_name']); ?></td>
            <td><?php echo htmlspecialchars($sub['email']); ?></td>
            <td><?php echo htmlspecialchars($sub['subscribed_at']); ?></td>
          </tr> 
        <?php endforeach; ?>
      </tbody>
    </table>
  <?php endif; ?>

  <p class="mt-3">
    <a href="index.php">Back to Subscribe Form</a>
  </p>
</main>

<?php require "includes/footer.php"; ?>