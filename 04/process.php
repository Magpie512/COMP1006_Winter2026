<?php
require "includes/header.php";

?>

<?php

echo "<h1>Order Confirmation</h1>";
echo "<p>Thank you for your order!</p>";

echo "<h2>Order Summary:</h2>";

$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$email = $_POST['email'];

/*
$message = $_POST['message'];
$subject = "BITYMI | New Order from " . $firstName . " " . $lastName;

// Email settings
    $to = 'your-email@example.com'; // Replace with your email
    $subject = 'BITYMI | New Contact Form Submission';
    $email_body = "Name: $firstName $lastName\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email\r\n"; // Sender's email
    $headers .= "Reply-To: $email\r\n"; // Allows reply
*/

# Server validation

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die('Invalid email format. Please go back and enter a valid email address.');
}

//validate first name
if (empty($firstName) || !preg_match("/^[a-zA-Z-' ]*$/", $firstName)) {
    die('Invalid first name. Please go back and enter a valid first name.');
}

//validate last name
if (empty($lastName) || !preg_match("/^[a-zA-Z-' ]*$/", $lastName)) {
    die('Invalid last name. Please go back and enter a valid last name.');
}

//validate address
if (!filter_var($address, FILTER_SANITIZE_STRING)) {
    die('Invalid address format. Please go back and enter a valid address.');
}

//Validate comment
if (!filter_var($_POST['comments'], FILTER_SANITIZE_STRING)) {
    die('Invalid comments format. Please go back and enter valid comments.');
}

// Validate phone number (basic validation)
if (!filter_var($phone, FILTER_SANITIZE_STRING)) {
    die('Invalid phone number format. Please go back and enter a valid phone number.');
}   
/*
// Send email
    if (mail($to, $subject, $email_body, $headers)) {
        echo 'Email sent successfully!';
    } else {
        echo 'Failed to send email. Check server settings.';
    }
*/

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

require "includes/footer.php";
