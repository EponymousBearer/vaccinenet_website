<?php

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from the form
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Connect to the database (replace with your database credentials)
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "patient";

    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare a SQL statement to retrieve the user's hashed password based on the username
    $sql = "SELECT * FROM `register` WHERE `email` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the user exists
    var_dump($result->num_rows);
    if ($result->num_rows === 1) {
        // Fetch the row
        $row = $result->fetch_assoc();

        // Verify the password
        if ($password === $row["password"]) {
            echo ":me";
            // Login successful
            // Store user information in the session

            $_SESSION["s.no"] = $row["s.no"];
            $_SESSION["email"] = $email;

            // Redirect to the patient panel or dashboard page
            header("Location: index.php");
            exit();
        } else {
            // Login failed
            echo "Invalid username or password. Please try again.";
        }
    } else {
        // Login failed
        echo "Invalid email or password. Please try again.";
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


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


    .wrapper2 {
        width: 350px;
        height: 400px;
        background: #fff;
        border-radius: 5px;
        box-shadow: 0px 4px 10px 1px rgba(0, 0, 0, 0.1);
        padding: 30px;
        max-width: 400px;
       margin: 170px auto;
    }

    .wrapper2 .title {
        border-radius: 5px 5px 0 0;
        color: #3498db;
        font-size: 30px;
        font-weight: 600;
        text-align: center;

    }

    .wrapper2 form {
        padding: 30px 25px 25px 25px;
    }

    .wrapper2 form .row {
        height: 45px;
        margin-bottom: 15px;
        position: relative;
    }

    .wrapper2 form .row input {
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

    .wrapper2 form .row i {
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

    .wrapper2 form .pass {
        margin: -8px 0 20px 0;
    }

    .wrapper2 form .pass a {
        color: #3498db;
        font-size: 17px;
        text-decoration: none;
    }

    .wrapper2 form .pass a:hover {
        text-decoration: underline;
    }

    .wrapper2 form .button input {
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

    .wrapper2 form .signup-link {
        text-align: center;
        margin-top: 20px;
        font-size: 17px;
    }

    .wrapper2 form .signup-link a {
        color: #3498db;
        text-decoration: none;
    }

    form .signup-link a:hover {
        text-decoration: underline;
    }
</style>

<body>

    <!-- <div class="alert alert-success alert-dismissible fade show" style="margin-top: 10px;" role="alert">
        <strong>Success!</strong> You are registered successfully!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> -->
    <div class="wrapper2">
        <div class="title"><span>Patient Login</span></div>
        <form action="../index.php" method="post" role="form" class="php-login-form">
            <div class="row">
                <i class="fas fa-user"></i>
                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control"
                    placeholder="Enter your email" required>
            </div>
            <div class="row">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter password"
                    required>
            </div>
            <div class="pass"><a href="#">Forgot password?</a></div>
            <div class="row button">
                <input type="submit" value="Login" href="../index.php">
            </div>
        </form>
    </div>


</body>

</html>