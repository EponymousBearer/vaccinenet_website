<?php

$showForm = true;
$successMessage = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $father_name = $_POST['father_name'];
    $father_cnic = $_POST['father_cnic'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

<<<<<<< HEAD
    // not to repeat or form a duplicate data
    if (empty($name) || empty($email) || empty($password) || empty($confirmpassword)) {
=======
    // not to repeat or form a dublicate data
    if (empty($name) || empty($father_name) || empty($father_cnic) || empty($gender) || empty($email) || empty($password) || empty($confirmpassword)) {
>>>>>>> e8c90d5c2383712145e22f7c88dd94369a46c1d3
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> Please fill in all fields.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>';
    } elseif ($password !== $confirmpassword) {
        $showForm = false;
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
<<<<<<< HEAD:patient_signup.php
        $db_password = "";
        $database = "patient";
=======
<<<<<<< HEAD
        $db_password = ""; // Change this to your database password
        $database = "signup";
=======
        $password = "";
        $database = "hospital";
>>>>>>> e8c90d5c2383712145e22f7c88dd94369a46c1d3
>>>>>>> 0d6508096a202aba8d06b2aef0cf995152f44ea5:signupp.php

        // Create a connection
        $conn = mysqli_connect($servername, $username, $db_password, $database);
        // Die if connection was not successful
        if (!$conn) {
            die("Sorry we failed to connect: " . mysqli_connect_error());
        } else {
<<<<<<< HEAD
            // Securely hash the password using password_hash()
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Sql query to be executed with the hashed password
            $sql = "INSERT INTO `register` ( `name`, `email`, `password`, `confirmpassword`) VALUES ('$name', '$email', '$hashed_password', '$confirmpassword')";
=======
            // Sql query to be executed
<<<<<<< HEAD:patient_signup.php
            $sql = "INSERT INTO `register` ( `name`, `father_name` , `father_cnic` , `gender` , `email`, `password`, `confirmpassword`) VALUES ('$name' , '$father_name' , '$father_cnic' , '$gender', '$email' ,'$password', '$confirmpassword')";
=======
            $sql = "INSERT INTO `register` ( `name`, `father_name` , `father_cnic` , `gender` , `email`, `password`, `confirmpassword`) VALUES ('$name' , '$father_name' , '$father_cnic' , '$email', '$gender' ,'$password', '$confirmpassword')";
>>>>>>> e8c90d5c2383712145e22f7c88dd94369a46c1d3
>>>>>>> 0d6508096a202aba8d06b2aef0cf995152f44ea5:signupp.php
            $result = mysqli_query($conn, $sql);

            if ($result) {
                $showForm = false;
                header("Location: patient_login.php");
                exit;
            } else {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> Unable to register, Please check your input.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
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
<<<<<<< HEAD
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
=======
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
>>>>>>> e8c90d5c2383712145e22f7c88dd94369a46c1d3
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
<<<<<<< HEAD
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
=======
        background: #4070f4;
    }

    .wrapper {
        position: relative;
        max-width: 430px;
        width: 100%;
        background: #fff;
        padding: 34px;
        border-radius: 6px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }

    .wrapper h2 {
        position: relative;
        font-size: 22px;
        font-weight: 600;
        color: #333;
    }

    .wrapper h2::before {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        height: 3px;
        width: 28px;
        border-radius: 12px;
        background: #4070f4;
    }

    .wrapper form {
        margin-top: 30px;
    }

    .wrapper form .input-box {
        height: 52px;
        margin: 18px 0;
    }

    form .input-box input {
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
    .input-box input:valid {
        border-color: #4070f4;
    }

    form .policy {
        display: flex;
        align-items: center;
    }

    form h3 {
        color: #707070;
        font-size: 14px;
        font-weight: 500;
        margin-left: 10px;
    }

    .input-box.button input {
        color: #fff;
        letter-spacing: 1px;
        border: none;
        background: #4070f4;
        cursor: pointer;
    }

    .input-box.button input:hover {
        background: #0e4bf1;
    }

    form .text h3 {
        color: #333;
        width: 100%;
        text-align: center;
    }

    form .text h3 a {
        color: #4070f4;
        text-decoration: none;
    }

    form .text h3 a:hover {
        text-decoration: underline;
    }

    .input-box .gender-container {
        display: flex;
        flex-direction: row;
        justify-content: center;
        gap: 50px;
    }

    .input-box .gender-container label {
        margin-left: 8px;
        margin-top: 8px;
        font-size: 16px;
        color: #333;
    }

    .input-box .gender-container input[type="radio"] {
        size: 1px;
    }

    .options {
        display: flex;
        align-items: center;

    }

    .policy input[type="checkbox"]:required:invalid+h3::after {
        content: "Please accept the terms & conditions";
        color: red;
        display: block;
    }
</style>

<?php
if ($showForm) {
    ?>

    <body>
        <div class="wrapper">
            <h2>Registration</h2>
            <form action="patient_signup.php" method="post" role="form" class="php-signup-form">
                <div class="input-box">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" required>
                </div>
                <div class="input-box">
                    <input type="text" name="father_name" id="father_name" class="form-control"
                        placeholder="Enter your father name" required>
                </div>
                <div class="input-box">
                    <input type="number" name="father_cnic" id="father_cnic" class="form-control"
                        placeholder="Enter your father cnic" required>
                </div>
                <div class="input-box" style="height: 100%;">
                    <div class="gender-container">
                        <div class="options">
                            <input type="radio" name="gender" id="male_gender" value="male" required>
                            <label for="male_gender">Male</label>
                        </div>
                        <div class="options">
                            <input type="radio" name="gender" id="female_gender" value="female" required>
                            <label for="female_gender">Female</label>
                        </div>
                        <div class="options">
                            <input type="radio" name="gender" id="other_gender" value="other" required>
                            <label for="other_gender">Other</label>
                        </div>
                    </div>
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
                    <input type="checkbox" required>
                    <h3 style="margin-top: 8px;">I accept all terms & condition</h3>
                </div>
                <div class="input-box button">
                    <input type="Submit" href="index.php" value="Register Now">
                </div>
                <div class="text">
                    <h3>Already have an account? <a href="patient_login.php">Login now</a></h3>
                </div>
            </form>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </body>
    <?php
} else {
    echo $successMessage;
}
?>
>>>>>>> e8c90d5c2383712145e22f7c88dd94369a46c1d3

</html>