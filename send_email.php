<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';  // Ensure the path is correct for the autoload file

$mail = new PHPMailer(true);  // Create a new PHPMailer instance and set it to throw exceptions on errors

try {
    // Capture the form data
    $name = $_POST['name'];  // Capture the user's name from the form
    $email = $_POST['email'];  // Capture the user's email address from the form
    $subject = $_POST['subject'];  // Capture the subject of the message from the form
    $message = $_POST['message'];  // Capture the message content from the form

    // SMTP server configuration for Mailtrap
    $mail->isSMTP();  // Set the mailer to use SMTP
    $mail->Host       = 'sandbox.smtp.mailtrap.io';  // Specify the SMTP server to send through
    $mail->SMTPAuth   = true;  // Enable SMTP authentication
    $mail->Port       = 2525;  // TCP port to connect to
    $mail->Username   = 'a199e3e0019f2d';  // SMTP username
    $mail->Password   = 'c990d6a4820598';  // SMTP password

    // Set the character encoding
    $mail->CharSet = 'UTF-8';  // Set the character set to UTF-8 to handle special characters

    // Set the sender and recipient
    $mail->setFrom('no-reply@demomailtrap.com', 'Your Application');  // Set the sender's email and name
    $mail->addAddress('test@demomailtrap.com', 'Test User');  // Add a recipient

    // Build the email body
    $mail->isHTML(true);  // Set email format to HTML
    $mail->Subject = $subject;  // Set the email subject
    $mail->Body    = "<p><strong>Name:</strong> $name</p>
                      <p><strong>Email:</strong> $email</p>
                      <p><strong>Message:</strong> $message</p>";  // Set the HTML body content
    $mail->AltBody = "Name: $name\nEmail: $email\nMessage: $message";  // Set the plain text body content

    // Send the email
    $mail->send();  // Attempt to send the email
    echo 'The message has been sent successfully';  // Output success message
} catch (Exception $e) {
    echo "The message could not be sent. PHPMailer Error: {$mail->ErrorInfo}";  // Output error message if sending fails
}
