<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

session_start();

// Include PHPMailer files
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Create a PHPMailer instance
    $mail = new PHPMailer();

    try {
        // Configure SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Your SMTP host
        $mail->SMTPAuth = true;
        $mail->Username = 'thalattamail@gmail.com'; // SMTP username
        $mail->Password = 'wluzyuecrrccrlsq'; // SMTP password
        $mail->SMTPSecure = 'STARTTLS'; // Enable TLS encryption, 'ssl' also possible
        $mail->Port = 587; // Your SMTP port

        // Sender and recipient settings
        $mail->setFrom('thalattamail@gmail.com', 'Your Name');
        $mail->addAddress('thalattamail@gmail.com', 'Recipient Name');

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'Contact Form Submission';
        $mail->Body = "Name: $name<br>Email: $email<br>Phone: $phone<br>Message: $message";

        // Send email
        if ($mail->send()) {
            $_SESSION['successMessage'] = 'Thank you for your message. We will contact you soon.';
        } else {
            $_SESSION['errorMessage'] = 'There was an error sending your message. Please try again.';
        }
    } catch (Exception $e) {
        $_SESSION['errorMessage'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    header('Location: contact.php');
    exit;
}
?>
