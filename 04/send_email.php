<!-- not needed and idk if this works. not a live serverthis is local -->
<?php
// Checks to see if form is submitted
if ($_POST) {
    // Retrieves form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Email settings
    $to = 'your-email@example.com'; // Replace with your email
    $subject = 'BITYMI | New Contact Form Submission';
    $email_body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email\r\n"; // Sender's email
    $headers .= "Reply-To: $email\r\n"; // Allows reply

    /**
     * Uses PHP's built-in FILTER_VALIDATE_EMAIL filter to check if the provided
     * email string conforms to a valid email format (e.g., user@example.com)
     */

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('Invalid email format');
    }

    // Send email
    if (mail($to, $subject, $email_body, $headers)) {
        echo 'Email sent successfully!';
    } else {
        echo 'Failed to send email. Check server settings.';
    }
}
?>   