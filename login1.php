<?php
// This script will handle login
session_start();

// Check if the user is already logged in
if (isset($_SESSION['name'])) {
    header("location: login.php");
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
    /* CSS styling for the form */
    /* ... (your existing CSS styles) ... */
  </style>

  <div class="container">
    <div class="wrapper">
      <div class="title"><span>Login Form</span></div>
      <form action="" method="post" role="form" class="php-login-form">
        <div class="row">
          <i class="fas fa-user"></i>
          <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" required>
        </div>
        <div class="row">
          <i class="fas fa-lock"></i>
          <input type="password" name="password" id="password" class="form-control" placeholder="Enter password" required>
        </div>
        <div class="pass"><a href="#">Forgot password?</a></div>
        <div class="row button">
          <input type="submit" herf=admin/index.php value="Login" name="submit">
        </div>
        <?php
        // Display error message, if any
        if (!empty($err)) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> ' . $err . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>';
        }
        ?>
      </form>
    </div>
  </div>

  </body>
</html>
