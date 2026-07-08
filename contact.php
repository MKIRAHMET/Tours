<?php
session_start();


include('includes/config.php');

// Include PHPMailer files
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Initialize variables to store success and error messages
$successMessage = '';
$errorMessage = '';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Server-side validation (basic)
    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        $errorMessage = 'All fields are required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMessage = 'Invalid email format.';
    } elseif (!preg_match('/^(?:\d{10}|\d{3}-\d{3}-\d{4})$/', $phone)) {
        $errorMessage = 'Invalid phone number format.';
    } else {
        // Create a PHPMailer instance
        $mail = new PHPMailer();

        try {
            // Configure SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'thalattamail@gmail.com'; // SMTP username
            $mail->Password = 'wluzyuecrrccrlsq'; // SMTP password
            $mail->SMTPSecure = 'STARTTLS';
            $mail->Port = 587;

            // Sender and recipient settings
            $mail->setFrom('thalattamail@gmail.com', 'Your Name');
            $mail->addAddress('thalattamail@gmail.com', 'Recipient Name');

            // Email content
            $mail->isHTML(true);
            $mail->Subject = 'Contact Form Submission';
            $mail->Body = "Name: $name<br>Email: $email<br>Phone: $phone<br>Message: $message";

            // Send email
            $mail->send();
            $successMessage = 'Thank you for your message. We will contact you soon.';
        } catch (Exception $e) {
            $errorMessage = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/carousel.css">
    <script src="js/jquery.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/forms.js"></script>
    <link rel="stylesheet" href="css1/header.css">
    <link href="css1/font-awesome.css" rel="stylesheet">
    <style>
        #message {
            height: 200px;
            width: 100%;
            resize: vertical;
        }
        .error {
            color: red;
            display: none;
        }
        .success-message {
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid transparent;
            border-radius: 4px;
        }
        .error-message {
            background-color: #f8d7da;
            border-color: #f5c6cb;
            color: #721c24;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid transparent;
            border-radius: 4px;
        }
    </style>
    <script>
        function validateForm() {
            let isValid = true;

            const nameInput = document.querySelector('input[name="name"]').value.trim();
            const nameError = document.getElementById('nameError');
            const nameEmpty = document.getElementById('nameEmpty');
            if (nameInput === '') {
                nameError.style.display = 'none';
                nameEmpty.style.display = 'inline';
                isValid = false;
            } else {
                nameEmpty.style.display = 'none';
                const nameRegex = /^[A-Za-z\s]+$/;
                if (!nameRegex.test(nameInput)) {
                    nameError.style.display = 'inline';
                    isValid = false;
                } else {
                    nameError.style.display = 'none';
                }
            }

            const emailInput = document.querySelector('input[name="email"]').value.trim();
            const emailError = document.getElementById('emailError');
            const emailEmpty = document.getElementById('emailEmpty');
            if (emailInput === '') {
                emailError.style.display = 'none';
                emailEmpty.style.display = 'inline';
                isValid = false;
            } else {
                emailEmpty.style.display = 'none';
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(emailInput)) {
                    emailError.style.display = 'inline';
                    isValid = false;
                } else {
                    emailError.style.display = 'none';
                }
            }

            const phoneInput = document.querySelector('input[name="phone"]').value.trim();
            const phoneError = document.getElementById('phoneError');
            const phoneEmpty = document.getElementById('phoneEmpty');
            if (phoneInput === '') {
                phoneError.style.display = 'none';
                phoneEmpty.style.display = 'inline';
                isValid = false;
            } else {
                phoneEmpty.style.display = 'none';
                const phoneRegex = /^(?:\d{10}|\d{3}-\d{3}-\d{4})$/;
                if (!phoneRegex.test(phoneInput)) {
                    phoneError.style.display = 'inline';
                    isValid = false;
                } else {
                    phoneError.style.display = 'none';
                }
            }

            const messageInput = document.querySelector('textarea[name="message"]').value.trim();
            const messageError = document.getElementById('messageError');
            const messageEmpty = document.getElementById('messageEmpty');
            if (messageInput === '') {
                messageError.style.display = 'none';
                messageEmpty.style.display = 'inline';
                isValid = false;
            } else {
                messageEmpty.style.display = 'none';
                if (messageInput.length < 10) {
                    messageError.style.display = 'inline';
                    isValid = false;
                } else {
                    messageError.style.display = 'none';
                }
            }

            return isValid;
        }
    </script>
</head>
<body>
    <?php include('includes/header.php'); ?>
    <div class="container" style="display: flex; justify-content: flex-end; align-items: center; color: white; padding: 20px;">
    <div class="div-telephone" style="display: flex; align-items: center;">
        <img src="img/viber.png" alt="Viber Icon" width="70" height="auto" style="margin-right: 5px;">
        <img src="img/tel-img.png" alt="Telephone Icon" style="margin-right: 5px;">
        <span style="color: white;">+30 694 0214 738</span>    </div>
</div>

    <header class="page-6">
        <div class="container">
            <div class="navbar navbar_ clearfix">
                <div class="navbar-inner">
                    <div class="clearfix">
                        <h1 class="brand"><a href="index.php"><img src="img/logo.png" alt="" style="width: 203px; height: auto;"></a><span>find the treasures of the underwater world</span></h1>
  
                    </div>
                    <?php
                    $currentPage = 'contact';
                    include('menu.php');
                    ?>
                    <div class="nav-collapse nav-collapse_ collapse"></div>
                </div>
            </div>
        </div>
    </header>
    <div id="content">
        <div class="container">
            <div class="row">
                <article class="span5">
                    <h2>Find Us</h2>
                    <div class="div-map">
                        <figure class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6113.729502113014!2d23.608353047202527!3d39.9891277061384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a625d66b8edee3%3A0x621732ff66dd3229!2sPefkochori%20630%2085!5e0!3m2!1str!2sgr!4v1717587285064!5m2!1str!2sgr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                        </figure>
                    </div>
                    <address class="adress">
                        <strong class="title1">THALLATTA<br>THESSALONIKI</strong>
                        <em><span>CELLphone:</span>+30 694 0214 738/em>
                        <em>E-mail: <a href="#">thalattamail@gmail.com</a></em>
                    </address>
                </article>
                <article class="span7">
                    <h2>Get In Touch</h2>
                    <form action="contact.php" method="post" onsubmit="return validateForm();">
                        <div>
                            <label for="name">Name:</label>
                            <input id="name" name="name" type="text">
                            <span id="nameError" class="error">*This is not a valid name.</span>
                            <span id="nameEmpty" class="error">*This field is required.</span>
                        </div>
                        <div>
                            <label for="email">Email:</label>
                            <input id="email" name="email" type="email">
                            <span id="emailError" class="error">*This is not a valid email address.</span>
                            <span id="emailEmpty" class="error">*This field is required.</span>
                        </div>
                        <div>
                            <label for="phone">Phone:</label>
                            <input id="phone" name="phone" type="tel">
                            <span id="phoneError" class="error">*This is not a valid phone number.</span>
                            <span id="phoneEmpty" class="error">*This field is required.</span>
                        </div>
                        <div>
                            <label for="message">Message:</label>
                            <textarea id="message" name="message" style="height: 150px;"></textarea>
                            <span id="messageError" class="error">*The message is too short.</span>
                            <span id="messageEmpty" class="error">*This field is required.</span>
                        </div>
                        <div>
                            <button type="submit">Submit</button>
                        </div>
                        <?php
                        if (!empty($successMessage)) {
                            echo "<div class='success-message'>$successMessage</div>";
                        }
                        if (!empty($errorMessage)) {
                            echo "<div class='error-message'>$errorMessage</div>";
                        }
                        ?>
                    </form>
                </article>
            </div>
        </div>
    </div>
    <?php include 'includes/footer1.php'; ?>
    <?php include('includes/signup.php'); ?>
    <?php include('includes/signin.php'); ?>
    <?php include 'PHPMailer/src/setup.php';?>
    <script src="js/bootstrap.js"></script>
</body>
</html>