<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "<p>Invalid request.</p>";
    exit;
}

// Sanitize inputs
$firstName = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_SPECIAL_CHARS);
$lastName  = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_SPECIAL_CHARS);
$email     = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$message   = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);

$errors = [];
// Makes ure all info user enterd is vallid
if (!$firstName) $errors[] = "First name is required.";
if (!$lastName)  $errors[] = "Last name is required.";

if (!$email) {
    $errors[] = "Email is required.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Email must be valid.";
}

if (!$message) $errors[] = "Message is required.";

// Show errors
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<p>$error</p>";
    }
    exit;
}

// Email bakery
$to = "info@bakery.com";
$subject = "New Contact Form Message";
$body = "From: $firstName $lastName\nEmail: $email\n\nMessage:\n$message";
$headers = "From: $email";

// Message receipt

echo "<h2>Thank you, $firstName!</h2>";
echo "<p>Your info has been sent.</p>";