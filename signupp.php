<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    // not to repeat or form a duplicate data
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
        $db_password = ""; // Change this to your database password
        $database = "signup";

        // Create a connection
        $conn = mysqli_connect($servername, $username, $db_password, $database);
        // Die if connection was not successful
        if (!$conn) {
            die("Sorry we failed to connect: " . mysqli_connect_error());
        } else {
            // Securely hash the password using password_hash()
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Sql query to be executed with the hashed password
            $sql = "INSERT INTO `register` ( `name`, `email`, `password`, `confirmpassword`) VALUES ('$name', '$email', '$hashed_password', '$confirmpassword')";
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
    <title> Sign Up form </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<style>
    .wrapper {
        background-color: #FFFFFF;
        /* Change the background color of the form to white */
        max-width: 430px;
        width: 100%;
        border-radius: 20px; 
        
        /* Add a border-radius to make the form's corners curved */
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);

    }

    .button-container {
        display: flex;
        flex-direction: row;
        background-color: #111;
    }

    .button-wrapper {
        background-color: #111;

    }

    .btn-admin,
    .btn-patient {
        padding: 10px 46px;
        font-size: 16px;
        font-weight: bold;
        text-decoration: none;
        color: #fff;
        transition: background-color 0.3s ease;
        
    }

    .btn-admin {
        background-color: #0074D9;
        /* Change the background color for the "Admin" button to blue */
    }

    .btn-patient {
        background-color: #0074D9;
        /* Change the background color for the "Hospital" button to blue */
    }

    .btn-hospital {
        background-color: #0074D9;
        /* Change the background color for the "Hospital" button to blue */
    }

    .btn-admin:hover,
    .btn-patient:hover,
    .btn-patient:hover {
        background-color: #0056b3;
        /* Change the background color on hover for both buttons */
    }


    form {
        display: flex;
        flex-direction: column;
    }

    .input-box {
        margin-bottom: 18px;
    }

    .policy {
        display: flex;
        align-items: center;
        margin-bottom: 18px;
    }

    /* Adjust the size of the checkboxes */
    .policy input[type="checkbox"] {
        margin-right: 8px;
        width: 16px;
        height: 16px;
    }

    body {
        background: #0074D9;
        /* Change the background color to blue */
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

/* ... Your existing CSS styles ... */

/* Style for custom validation message */
.custom-validation-message {
    color: red;
    font-size: 14px;
    margin-top: 4px;
}
</style>

<body>
    <div class="wrapper">
        <div class="button-container">
            <div class="button-wrapper">
                <a href="login.php" class="btn-admin">Admin</a>
            </div>
            <div class="button-wrapper">
                <a href="child.php" class="btn-patient">Pateint</a>
            </div>
            <div class="button-wrapper">
                <a href="hospital.php" class="btn-patient">Hospital</a>
            </div>
        </div>
        <div style="padding: 10px;">
            <h2>Registration</h2>
            <form action="signupp.php" method="post" role="form" class="php-signup-form">
                <div class="input-box">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name"
                        required>
                </div>
                <div class="input-box">
                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control"
                        placeholder="Enter your email" required>
                </div>
                <div class="input-box">
                    <input type="password" name="password" id="password" class="form-control"
                        placeholder="Enter your password" required>
                </div>
                <div class="input-box">
                    <input type="password" name="confirmpassword" id="confirmpassword" class="form-control"
                        placeholder="Confirm your password" required>
                </div>
                <div class="policy">
                <input type="checkbox" name="terms" id="terms" required>
                    <h3>I accept all terms & condition</h3>
                </div>
                <div class="input-box button">
                    <input type="Submit" href="index.php" value="Register Now">
                </div>
                <div class="text">
                    <h3>Already have an account? <a href="login.php">Login now</a></h3>
                </div>
            </form>
        </div>
    </div>
    <script>
        function validateForm() {
            var termsCheckbox = document.getElementById("terms");
            var termsValidationMessage = document.getElementById("terms-validation");
            if (!termsCheckbox.checked) {
                termsValidationMessage.style.display = "block";
                return false;
            }
            termsValidationMessage.style.display = "none";
            return true;
        }
    </script>
</body>

</html>