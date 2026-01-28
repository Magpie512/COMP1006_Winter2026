<?php

echo "<p>Thank you for your order!</p>";

echo "<h2>Order Summary:</h2>";

echo"<ul>";
foreach ($_POST['items'] as $item => $quantity) {
    if ($quantity > 0) {
        echo "<li>" . htmlspecialchars($item) . ": " . htmlspecialchars($quantity) . "</li>";
    }
}
echo "</ul>";

echo "Once again, thank you for shopping with us!";