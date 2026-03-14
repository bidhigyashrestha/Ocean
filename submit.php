<?php
// Simple PHP mail handler for fitness coaching form
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $age = htmlspecialchars($_POST['age'] ?? '');
    $gender = htmlspecialchars($_POST['gender'] ?? '');
    $height = htmlspecialchars($_POST['height'] ?? '');
    $weight = htmlspecialchars($_POST['weight'] ?? '');
    $goals = htmlspecialchars($_POST['goals'] ?? '');
    $experience = htmlspecialchars($_POST['experience'] ?? '');
    $medical = htmlspecialchars($_POST['medical'] ?? '');
    $contact_method = htmlspecialchars($_POST['contact_method'] ?? '');

    $to = 'shresthaocean351@gmail.com'; // Changed to your email address
    $subject = 'New Coaching Application';
    $message = "New coaching application received:\n\n" .
        "Name: $name\n" .
        "Email: $email\n" .
        "Phone: $phone\n" .
        "Age: $age\n" .
        "Gender: $gender\n" .
        "Height: $height cm\n" .
        "Weight: $weight kg\n" .
        "Goals: $goals\n" .
        "Experience: $experience\n" .
        "Medical: $medical\n" .
        "Preferred Contact: $contact_method\n";
    $headers = "From: $email\r\nReply-To: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "<h2>Thank you! Your application has been sent.</h2>";
    } else {
        echo "<h2>Sorry, there was a problem sending your application. Please try again later.</h2>";
    }
} else {
    header('Location: startcoaching.html');
    exit();
}
?>