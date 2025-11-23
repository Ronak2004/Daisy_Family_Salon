<?php
session_start(); // Start the session
require "connection.php"; // Include the database connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = mysqli_real_escape_string($conn, $_POST['name']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);

    // Query to check if the user exists in the database
    $sql = "SELECT * FROM admin WHERE username='$user' AND password='$pass'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        // Store session variables
        $_SESSION['user_id'] = $row['id']; // Assuming 'id' is the unique identifier
        $_SESSION['username'] = $row['username'];

        // Redirect to index.php
        header("Location: index.php");
        exit();
    } else {
        // Login failed, show error message
        $error_message = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        body {
            background-image: url('loginbg.jpg');
            background-size: cover;
            color: orange;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .form-container {
            border: 3px solid orange;
            padding: 20px;
            border-radius: 15px;
            background-color: white;
            width: 400px;
            margin: 100px auto;
        }

        th {
            text-align: center;
            font-size: 24px;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
            border: 1px solid orange;
        }

        input[type="submit"], input[type="reset"] {
            width: 100px;
            padding: 10px;
            margin: 10px 5px;
            border: none;
            border-radius: 5px;
            background-color: orange;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover, input[type="reset"]:hover {
            background-color: darkorange;
        }

        .error {
            color: red;
            text-align: center;
            font-weight: bold;
        }

        h6 {
            text-align: center;
        }

        a {
            color: orange;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<center>
    <div class="form-container">
        <form method="post">
            <table cellspacing="10" border="0">
                <tr>
                    <th colspan="2"><h1>Login</h1></th>
                </tr>
                <?php if (isset($error_message)) { ?>
                    <tr>
                        <td colspan="2" class="error"><?php echo $error_message; ?></td>
                    </tr>
                <?php } ?>
                <tr>
                    <td colspan="2">Username<br>
                        <input type="text" name="name" id="txtname" placeholder="Enter Your Username" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Password<br>
                        <input type="password" name="password" id="txtpass" placeholder="Enter Your Password" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Login">
                        <input type="reset" value="Reset">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <h6>Don't have an account? <a href="register.php">Register</a></h6>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</center>

</body>
</html>
