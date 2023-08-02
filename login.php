<?php
// This script will handle login
session_start();

// Check if the user is already logged in
if (isset($_SESSION['name'])) {
    header("location: admin/index.php");
    exit;
}

require_once "attach.php";

$username = $password = "";
$err = "";

// If request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (empty(trim($_POST['name'])) || empty(trim($_POST['password']))) {
        $err = "Please enter name and password";
    } else {
        $username = trim($_POST['name']);
        $password = trim($_POST['password']);
    }

    if (empty($err)) {
        $sql = "SELECT `s.no`, name, password FROM register WHERE name = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if (!$stmt) {
            die("Error: Unable to prepare the statement. " . mysqli_error($conn));
        }

        $param_name = $username;
        mysqli_stmt_bind_param($stmt, "s", $param_name);

        // Try to execute this statement
        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_store_result($stmt);
            if (mysqli_stmt_num_rows($stmt) == 1) {
                mysqli_stmt_bind_result($stmt, $serial_no, $name, $hashed_password);
                if (mysqli_stmt_fetch($stmt)) {
                    if (password_verify($password, $hashed_password)) {
                        // This means the password is correct. Allow the user to log in.
                        $_SESSION["name"] = $name;
                        $_SESSION["s.no"] = $serial_no;
                        $_SESSION["loggedin"] = true;

                        // Redirect the user to the welcome page
                        header("location: admin/index.php");
                        exit; // Important to exit to prevent further execution of the code
                    } else {
                        // Invalid password, show error message
                        $err = "Invalid password";
                    }
                }
            } else {
                // User not found, show error message
                $err = "User not found";
            }
        } else {
            // Database query error, show error message
            $err = "Database query error";
            // You can display the detailed error message from the database using the following line:
            // echo mysqli_error($conn);
        }

        mysqli_stmt_close($stmt); // Close the statement when you are done with it
    }
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login Form | CodingLab</title> 
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
  <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #3498db;
            overflow: hidden;
        }

        ::selection {
            background: rgba(26, 188, 156, 0.3);
        }

        .container {
            max-width: 440px;
            padding: 0 20px;
            margin: 170px auto;
        }

        .wrapper {
            width: 450px;
            height: 425px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0px 4px 10px 1px rgba(0, 0, 0, 0.1);
        }

        .wrapper .title {
            height: 90px;
            background: #d2e9f7;
            border-radius: 5px 5px 0 0;
            color: #3498db;
            font-size: 30px;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .wrapper form {
            padding: 35px 30px 29px 29px;
        }

        .wrapper form .row {
            height: 55px;
            margin-bottom: 45px;
            position: relative;
        }

        .wrapper form .row input {
            height: 100%;
            width: 100%;
            outline: none;
            padding-left: 60px;
            border-radius: 10px;
            border: 1px solid lightgrey;
            font-size: 20px;
            transition: all 0.3s ease;
        }

        form .row input:focus {
            border-color: #3498db;
            box-shadow: inset 0px 0px 2px 2px rgba(26, 188, 156, 0.25);
        }

        form .row input::placeholder {
            color: #999;
        }

        .wrapper form .row i {
            position: absolute;
            width: 47px;
            height: 100%;
            color: #fff;
            font-size: 18px;
            background: #3498db;
            border: 1px solid #3498db;
            border-radius: 5px 0 0 5px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .wrapper form .pass {
            margin: -8px 0 20px 0;
        }

        .wrapper form .pass a {
            color: #3498db;
            font-size: 17px;
            text-decoration: none;
        }

        .wrapper form .pass a:hover {
            text-decoration: underline;
        }

        .wrapper form .button input {
            color: #fff;
        font-size: 20px;
        font-weight: 500;
        padding: 0 20px;
        height: 55px;
        width: 100%; /* Set the width to 100% */
        background: #3498db;
        border: 1px solid #16a085;
        cursor: pointer;
        border-radius: 10px;

        }

        form .button input:hover {
            background: #3498db;
        }

        .wrapper form .signup-link {
            text-align: center;
            margin-top: 20px;
            font-size: 17px;
        }

        .wrapper form .signup-link a {
            color: #3498db;
            text-decoration: none;
        }

        form .signup-link a:hover {
            text-decoration: underline;
        }
        </style>

    <!-- form start point -->
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Login Form</span></div>
        <form action="index.php" method="post" role="form" class="php-login-form">
        <div class="row">
                    <!-- Icon for name input -->
                    <i class="fas fa-user"></i>
                    
                    <input type="text" id="name" name="name" placeholder="Enter name" required>
                </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" class="form-control" placeholder="Enter password" required>
          </div>
          <div class="pass"><a href="#">Forgot password?</a></div>
          <div class="row button">
            <input type="submit" value="Login" href="admin/index.php">
          </div>
         
        </form>
      </div>
    </div>

  </body>
</html>




 