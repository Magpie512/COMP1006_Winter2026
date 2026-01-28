<?php

echo "<h1>Order Confirmation</h1>";
echo "<p>Thank you for your order!</p>";

echo "<h2>Order Summary:</h2>";

echo "<h3>Customer Information:</h3>";
echo "<p>";
echo "Name: " . htmlspecialchars($_POST['first_name']) . " " . htmlspecialchars($_POST['last_name']) . "<br>";
echo "Phone: " . htmlspecialchars($_POST['phone']) . "<br>";
echo "Address: " . htmlspecialchars($_POST['address']) . "<br>";
echo "Email: " . htmlspecialchars($_POST['email']) . "<br>";
echo "</p>";

echo "<h3>Items Ordered:</h3>";
echo "<ul>";

# Convert Item Names to more legible format
$item_names = [
    'chaos_croissant' => 'Chaos Croissant',
    'midnight_muffin' => 'Midnight Muffin',
    'existential_eclair' => 'Existential Éclair',
    'procrastination_cookie' => 'Procrastination Cookie',
    'finals_week_brownie' => 'Finals Week Brownie',
    'victory_cinnamon_roll' => 'Victory Cinnamon Roll'
];

foreach ($_POST['items'] as $item => $quantity) {
    if ($quantity > 0) {
        echo "<li>" . htmlspecialchars($item_names[$item]) . ": " . htmlspecialchars($quantity) . "</li>";
    }
}

echo "</ul>";

echo "Once again, thank you for shopping with us!";