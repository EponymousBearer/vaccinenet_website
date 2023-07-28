<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    // not to repeat or form a dublicate data
    if (empty($name) || empty($email) || empty($password) || empty($confirmpassword)) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> Please fill in all fields.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>';
    } elseif ($password !== $confirmpassword) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> Passwords do not match.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>';
    } else {
        // Connecting to the Database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "signup";

        // Create a connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        // Die if connection was not successful
        if (!$conn) {
            die("Sorry we failed to connect: " . mysqli_connect_error());
        } else {
            // Sql query to be executed
            $sql = "INSERT INTO `register` ( `name`, `email`, `password`, `confirmpassword`) VALUES ('$name', '$email', '$password', '$confirmpassword')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> You are registered successfully!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>';
            } else {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> Unable to register, Please check your input.
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sign Up form  </title> 
    <link rel="stylesheet" href="style.css">
   </head>

    <style>@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
        *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        }
        body{
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #4070f4;
        }
        .wrapper{
        position: relative;
        max-width: 430px;
        width: 100%;
        background: #fff;
        padding: 34px;
        border-radius: 6px;
        box-shadow: 0 5px 10px rgba(0,0,0,0.2);
        }
        .wrapper h2{
        position: relative;
        font-size: 22px;
        font-weight: 600;
        color: #333;
        }
        .wrapper h2::before{
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        height: 3px;
        width: 28px;
        border-radius: 12px;
        background: #4070f4;
        }
        .wrapper form{
        margin-top: 30px;
        }
        .wrapper form .input-box{
        height: 52px;
        margin: 18px 0;
        }
        form .input-box input{
        height: 100%;
        width: 100%;
        outline: none;
        padding: 0 15px;
        font-size: 17px;
        font-weight: 400;
        color: #333;
        border: 1.5px solid #C7BEBE;
        border-bottom-width: 2.5px;
        border-radius: 6px;
        transition: all 0.3s ease;
        }
        .input-box input:focus,
        .input-box input:valid{
        border-color: #4070f4;
        }
        form .policy{
        display: flex;
        align-items: center;
        }
        form h3{
        color: #707070;
        font-size: 14px;
        font-weight: 500;
        margin-left: 10px;
        }
        .input-box.button input{
        color: #fff;
        letter-spacing: 1px;
        border: none;
        background: #4070f4;
        cursor: pointer;
        }
        .input-box.button input:hover{
        background: #0e4bf1;
        }
        form .text h3{
        color: #333;
        width: 100%;
        text-align: center;
        }
        form .text h3 a{
        color: #4070f4;
        text-decoration: none;
        }
        form .text h3 a:hover{
        text-decoration: underline;
        }
        </style>

  <div class="wrapper">
    <h2>Registration</h2>
    <form action="signupp.php" method="post" role="form" class="php-signup-form">
      <div class="input-box">
      <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" required>
      </div>
      <div class="input-box">
      <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Enter your email" required>
      </div>
      <div class="input-box">
      <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
      </div>
      <div class="input-box">
      <input type="password" name="confirmpassword" id="confirmpassword" class="form-control" placeholder="Confirm your password" required>
      </div>
      <div class="policy">
        <input type="checkbox">
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="Submit" href="index.php" value="Register Now" >
      </div>
      <div class="text">
        <h3>Already have an account? <a href="login.php">Login now</a></h3>
      </div>
    </form>
  </div>

</body>
</html>
