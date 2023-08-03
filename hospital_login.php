<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // not to have duplicate data
    if (empty($email) || empty($password)) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> Please fill in all fields.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>';
    } else {
        // Connecting to the Database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = " signup";

        // Create a connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        // Die if connection was not successful
        if (!$conn) {
            die("Sorry we failed to connect: " . mysqli_connect_error());
        } else {
            // table
            $sql = "INSERT INTO `logged` ( `email`, `password`) VALUES ( '$email', '$password')";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) == 1) {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> Logged in successfully!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>';
            } else {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> Invalid email or password.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>';
            }
        }
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
            width: 400px;
            height: 400px;
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
            padding: 30px 25px 25px 25px;
        }

        .wrapper form .row {
            height: 45px;
            margin-bottom: 15px;
            position: relative;
        }

        .wrapper form .row input {
            height: 100%;
            width: 100%;
            outline: none;
            padding-left: 60px;
            border-radius: 5px;
            border: 1px solid lightgrey;
            font-size: 16px;
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
            padding-left: 0px;
            background: #3498db;
            border: 1px solid #16a085;
            cursor: pointer;
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
            <i class="fas fa-user"></i>
            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Enter your email" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" class="form-control" placeholder="Enter password" required>
          </div>
          <div class="pass"><a href="#">Forgot password?</a></div>
          <div class="row button">
            <input type="submit" value="Login" href="index.php">
          </div>
          <div class="signup-link">Not a member? <a href="signupp.php">Register now</a></div>
        </form>
      </div>
    </div>

  </body>
</html>