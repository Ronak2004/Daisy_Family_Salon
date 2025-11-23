<?php
// Display PHP errors for debugging purposes
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Include the header file if needed
include 'header.php';

// Include PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Correct path to the autoload.php file
require 'phpmail/vendor/autoload.php'; 

// Initialize variables for messages
$successMessage = '';
$errorMessage = '';

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['uname']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $satisfy = htmlspecialchars($_POST['satisfy']);
    $msg = htmlspecialchars($_POST['msg']);

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io'; // Set the SMTP server to send through
        $mail->SMTPAuth = true;
        $mail->Username = '19ee0cda2f9ca7'; // SMTP username
        $mail->Password = 'd7903383eb6f08'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 2525; // Port number

        // Recipients
        $mail->setFrom('your-email@example.com', 'Daisy Family Salon');
        $mail->addAddress('recipient@example.com', 'Recipient Name');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Feedback Form Submission';
        $mail->Body    = "<html>
                            <body style='font-family: Arial, sans-serif; background-color: #f4f4f4; color: #333;'>
                                <div style='max-width: 600px; margin: auto; padding: 20px; border-radius: 10px; background-color: #fff; box-shadow: 0px 4px 6px rgba(0,0,0,0.1);'>
                                    <h1 style='color: #333;'>Feedback from {$name}</h1>
                                    <p><strong>Email:</strong> {$email}</p>
                                    <p><strong>Phone:</strong> {$phone}</p>
                                    <p><strong>Satisfied:</strong> {$satisfy}</p>
                                    <p><strong>Message:</strong></p>
                                    <div style='background-color: #f9f9f9; border-left: 4px solid #007BFF; padding: 10px; border-radius: 5px;'>{$msg}</div>
                                </div>
                            </body>
                          </html>";

        $mail->send();
        $successMessage = 'Message has been sent';
    } catch (Exception $e) {
        $errorMessage = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        a {
            color: white;
            text-decoration: none;
        }
        body {
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: space-around;
            flex-direction: column;
            background-color:white /*rgb(218, 147, 71)*/;
            font-family: 'Poppins', sans-serif;
            margin-top: 15%;
        }
        .textup {
            text-align: center;
            color: black;
            font-weight: 700;
        }
        i {
            margin-right: 3px;
        }
        .form-box {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(36, 67, 40, 0.8);
            padding: 15px;
            border-radius: 8px;
            width: 500px;
            margin-top: 1%;
            margin-bottom: 5%;
            position: relative;
            overflow: hidden;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
        }
        .radio-group {
            display: flex;
            margin-bottom: 16px;
        }
        input[type="radio"] {
            margin-right: 8px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-size: 17px;
            color: black;
            font-weight: 600;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
            border-radius: 10px;
            border: 2px solid black; /* Black border for text boxes */
        }
        button {
            background-color: rgb(184, 114, 40);
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            width: 100%;
            font-size: 15px;
            transition: .2s linear;
        }
        button:hover {
            background-color: rgb(184, 114, 40);
            border: none;
            transform: translateY(-10px);
        }
        h1 {
            color: black;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            <?php if ($successMessage): ?>
                alert('<?php echo $successMessage; ?>');
            <?php elseif ($errorMessage): ?>
                alert('<?php echo $errorMessage; ?>');
            <?php endif; ?>
        });
    </script>
</head>
<body>
    <h1>Feedback Form</h1>
    <div class="form-box">
        <div class="textup">
            <i class="fa fa-solid fa-clock"></i>
            It only takes two minutes!!
        </div>
        <form action="FeedbackForm.php" method="post"> <!-- Form action to itself -->
            <label for="uname">
                <i class="fa fa-solid fa-user"></i>
                Name
            </label>
            <input type="text" id="uname" name="uname" required>

            <label for="email">
                <i class="fa fa-solid fa-envelope"></i>
                Email Address
            </label>
            <input type="email" id="email" name="email" required>

            <label for="phone">
                <i class="fa-solid fa-phone"></i>
                Phone No
            </label>
            <input type="tel" id="phone" name="phone" required>

            <label>
                <i class="fa-solid fa-face-smile"></i>
                Do you satisfy with our service?
            </label>
            <div class="radio-group">
                <input type="radio" id="yes" name="satisfy" value="yes" checked>
                <label for="yes">Yes</label>

                <input type="radio" id="no" name="satisfy" value="no">
                <label for="no">No</label>
            </div>

            <label for="msg">
                <i class="fa-solid fa-comments" style="margin-right: 3px;"></i>
                Write your Suggestions:
            </label>
            <textarea id="msg" name="msg" rows="4" cols="10" required></textarea>
            <button type="submit">
                Submit
            </button>
        </form>
    </div>
    <?php
    // Include the footer file if needed
    include 'footer.php';
    ?>
</body>
</html>
