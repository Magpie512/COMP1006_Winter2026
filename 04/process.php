<?php
require "includes/header.php";

?>

<?php

echo "<h1>Order Confirmation</h1>";
echo "<p>Thank you for your order!</p>";

echo "<h2>Order Summary:</h2>";

//filter_input is for getting user inputs safely
//filter_var is for validating data

//Sanitization for user inputs
$firstName = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_SPECIAL_CHARS);
$lastName = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_SPECIAL_CHARS);
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS);
$address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

//Validation
$errors = [];

//FN
if ($firstName == null || $firstName == "") {
    $errors[] = "First name is required.";
    exit;
}

//LN
if ($lastName == null || $lastName == "") {
    $errors[] = "Last name is required.";
    exit;
}

//AD
if ($address == null || $address == "") {
    $errors[] = "Address is required.";
    exit;
}

//EM
if ($email == null || $email == "") {
    $errors[] = "Email address is required.";
    exit;
}

//Phone Validation
$phonePattern = "/^\d{3}-\d{3}-\d{4}$/";

//Order Validation
$itemsOrdered = [];

if (count($itemsOrdered) == 0) {
    $errors[] = "At least one item must be ordered.";
    exit;
}

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

/*
// Send email
    if (mail($to, $subject, $email_body, $headers)) {
        echo 'Email sent successfully!';
    } else {
        echo 'Failed to send email. Check server settings.';
    }
*/

/********************************************************************/

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
