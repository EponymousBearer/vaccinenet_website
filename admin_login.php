<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form | CodingLab</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

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
        max-width: 400px;
        padding: 20px;
        margin: 170px auto;
    }

    .wrapper {
        background: #fff;
        border-radius: 5px;
        box-shadow: 0px 4px 10px 1px rgba(0, 0, 0, 0.1);
        padding: 30px;
    }

    .wrapper .title {
        text-align: center;
        color: #3498db;
        font-size: 30px;
        font-weight: 600;
        margin-bottom: 20px;
    }

    .wrapper form .row {
        height: 50px;
        margin-bottom: 25px;
        position: relative;
    }

    .wrapper form .row input {
        height: 100%;
        width: 100%;
        outline: none;
        padding-left: 50px;
        border-radius: 10px;
        border: 1px solid lightgrey;
        font-size: 18px;
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
        width: 40px;
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
        text-align: right;
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
        font-size: 18px;
        font-weight: 500;
        padding: 0 20px;
        height: 50px;
        width: 100%;
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

<body>
    <!-- form start point -->
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
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter password"
                    required>
            </div>
            <div class="pass"><a href="#">Forgot password?</a></div>
            <div class="row button">
                <input type="submit" value="Login">
            </div>

        </form>
    </div>


</body>

</html>