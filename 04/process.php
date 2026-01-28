<?php

echo "<h1>Order Confirmation</h1>";
echo "<p>Thank you for your order!</p>";

echo "<h2>Order Summary:</h2>";

$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$email = $_POST['email'];

echo "<h3>Customer Information:</h3>";
echo "<p>";
echo "Name: " . $firstName . " " . $lastName . "<br>";
echo "Phone: " . $phone . "<br>";
echo "Address: " . $address . "<br>";
echo "Email: " . $email . "<br>";
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
        echo "<li>" . $item_names[$item] . ": " . $quantity . "</li>";
    }
}

echo "</ul>";

echo "<h3>Additional Comments:</h3>";
if (!empty($_POST['comments'])) {
    echo "<p>" . nl2br(htmlspecialchars($_POST['comments'])) . "</p>";
} 