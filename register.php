<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style>
        body {
            background-image: url('loginbg.jpg'); /* Background image */
            background-size: cover; /* Ensures the background image covers the entire page */
            color: orange; /* Text color */ 
            font-family: Arial, sans-serif; /* Font family */
            margin: 0; /* Remove default margin */
            padding: 0; /* Remove default padding */
        }

        .form-container {
            border: 3px solid orange; /* Solid border */
            padding: 20px; /* Padding inside the border */
            border-radius: 15px; /* Rounded corners */
            background-color: white; /* Solid background color */
            width: 400px; /* Fixed width for the form container */
            margin: 100px auto; /* Center the form container horizontally and add space at the top */
        }

        th {
            text-align: center; /* Center the text */
            font-size: 24px; /* Increase font size for the heading */
        }

        input[type="text"], input[type="password"] {
            width: 100%; /* Full width for input fields */
            padding: 10px; /* Padding inside the input fields */
            margin: 5px 0; /* Margin around the input fields */
            border-radius: 5px; /* Rounded corners for input fields */
            border: 1px solid orange; /* Border color for input fields */
        }

        input[type="submit"], input[type="reset"] {
            width: 100px; /* Fixed width for buttons */
            padding: 10px; /* Padding inside the buttons */
            margin: 10px 5px; /* Margin around the buttons */
            border: none; /* Remove default border */
            border-radius: 5px; /* Rounded corners for buttons */
            background-color: orange; /* Button background color */
            color: white; /* Button text color */
            cursor: pointer; /* Pointer cursor on hover */
        }

        input[type="submit"]:hover, input[type="reset"]:hover {
            background-color: darkorange; /* Darker background on hover */
        }

        h6 {
            text-align: center; /* Center the text */
        }

        a {
            color: orange; /* Link color */
            text-decoration: none; /* Remove underline from links */
        }

        a:hover {
            text-decoration: underline; /* Underline links on hover */
        }
    </style>
</head>
<body>
<center>
<?php
require "connection.php";
if (isset($_POST['create'])) {
    $username = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if (empty($username) || empty($email) || empty($password)) {
        if (empty($username)) {
            echo "<font color='red'>Username Cannot Be Blank</font><br>";
        }
        if (empty($email)) {
            echo "<font color='red'>Email Cannot Be Blank</font><br>";
        }
        if (empty($password)) {
            echo "<font color='red'>Password Cannot Be Blank</font><br>";
        }
    } else {
        $result = mysqli_query($conn, "INSERT INTO admin (username, email, password) VALUES ('$username', '$email', '$password')");
        if ($result) {
            echo "<p><font color='orange'>Account Created Successfully</font></p>";
            header("Location: login.php"); // Redirect to login page
            exit(); // Ensure script stops after redirect
        } else {
            echo "<p><font color='red'>Error: Could not create account. Please try again later.</font></p>";
        }
    }
}
?> 

<div class="outer-container">
    <div class="form-container">
        <form method="post">
            <table cellspacing="10" border="0">
                <tr>
                    <th colspan="2"><h1>Register</h1></th>
                </tr>
                <tr>
                    <td colspan="2">Username<br>
                    <input type="text" name="name" id="name" placeholder="Enter Your Username"></td>
                </tr>
                <tr>
                    <td colspan="2">Email<br>
                    <input type="text" name="email" id="email" placeholder="Enter Your Email Id"></td>
                </tr>
                <tr>
                    <td colspan="2">Password<br>
                    <input type="password" name="password" id="password" placeholder="Enter Your Password"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Create" name="create">
                        <input type="reset" value="Reset">      
                    </td>
                </tr>
                <tr>
                    <td><h6>Do you already have an account? <a href="login.php">Login</a></h6></td>
                </tr>
            </table>
        </form>
    </div>
</div>
</center>
</body>
</html>
