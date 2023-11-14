<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Add your email address where you want to receive the messages
    $to = "rhitioussama@gmail.com";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Subject: $subject\n";
    $email_message .= "Message:\n$message";

    // Set headers
    $headers = "From: $email";

    // Send the email
    mail($to, $subject, $email_message, $headers);

    // You can also redirect the user to a thank you page after submission
    header("Location: thank-you.html");
    exit();
}
?>
