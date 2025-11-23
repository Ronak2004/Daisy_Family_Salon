<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Correct path to the autoload.php file
require 'phpmail/vendor/autoload.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email_address = htmlspecialchars($_POST['email_address']);
    $phone = htmlspecialchars($_POST['phone']);
    $category = htmlspecialchars($_POST['category']);
    $date = htmlspecialchars($_POST['date']);
    $message = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io'; // Set the SMTP server to send through
        $mail->SMTPAuth = true;
        $mail->Username = '19ee0cda2f9ca7'; // SMTP username
        $mail->Password = 'd7903383eb6f08'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 2525;

        // Recipients
        $mail->setFrom('from_email@example.com', 'Daisy Family Salon');
        $mail->addAddress('recipient@example.com', 'Joe User'); 
        $mail->addAddress('ronakjethwa148@gmail.com', 'Daisy Family Salon'); // Add a recipient

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Appointment Request';
        $mail->Body = "<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333333;
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #dddddd;
        }
        th {
            background-color: #f2f2f2;
            color: #333333;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <div class='container'>
        <h1>Appointment Details</h1>
        <table>
            <tr>
                <th>Name</th>
                <td>$name</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>$email_address</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>$phone</td>
            </tr>
            <tr>
                <th>Category</th>
                <td>$category</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>$date</td>
            </tr>
            <tr>
                <th>Message</th>
                <td>$message</td>
            </tr>
        </table>
    </div>
</body>
</html>";

        $mail->send();
        
        // Show alert and redirect
        echo "<script>
                alert('Message has been sent successfully');
                window.location.href='index.php';
              </script>";
        exit;
        
    } catch (Exception $e) {
        error_log("Mailer Error: {$mail->ErrorInfo}"); // Log error to file
        echo "<script>
                alert('Message could not be sent. Please try again later.');
                window.location.href='index.php';
              </script>";
        exit;
    }
} else {
    echo "<script>
            alert('Invalid request method.');
            window.location.href='index.php';
          </script>";
    exit;
}
