<?php
// Sanitize and validate user inputs
$firstName = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_SPECIAL_CHARS); 
$lastName = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_SPECIAL_CHARS); 
$address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS);

$errors = [];
if (!$firstName) $errors['first_name'] = "First name is required.";
if (!$lastName) $errors['last_name'] = "Last name is required.";
if (!$address) $errors['address'] = "Address is required.";
if (!$email) $errors['email'] = "Email is required.";
if (!$phone) $errors['phone'] = "Phone number is required.";
if (!preg_match('/^\d{3}-\d{3}-\d{4}$/', $phone)) {
 $errors['phone'] = "Phone number must be in the format 555-123-4567.";
}

// Shows Errors 
if (!empty($errors)) {
    foreach ($errors as $field => $error) {
        echo "<p>Error in $field: $error</p>";
    }
    exit;
 }