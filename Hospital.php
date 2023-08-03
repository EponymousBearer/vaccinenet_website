<?php

$showForm = true;
$successMessage = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];
    $location = $_POST['location'];
    

    // not to repeat or form a dublicate data
    if (empty($name)  || empty($email) || empty($contact_number) || empty($location) ) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> Please fill in all fields.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>';
    }  else {
        // Connecting to the Database
        $servername = "localhost";
        $username = "root";
        $db_password = "";
        $database = "hospital";

        // Create a connection
        $conn = mysqli_connect($servername, $username, $db_password, $database);
        // Die if connection was not successful
        if (!$conn) {
            die("Sorry we failed to connect: " . mysqli_connect_error());
        } else {

            // Sql query to be executed
            $sql = "INSERT INTO `register` ( `name`, `email` , `contact_number` , `location`) VALUES ('$name' , '$email' , '$contact_number' , '$location')";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                $showForm = false;
                header("Location: hospital_login.php");
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
        margin: 39px 0;
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
        .now {
            margin: 5px ;
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
        .policy input[type="checkbox"]:required:invalid+h3::after {
        content: "Please accept the terms & conditions";
        color: red;
        display: block;
    }
        </style>

<?php
if ($showForm){ 
    ?>
  <div class="wrapper">
    <h2> Hospital Registration</h2>
    <form action="Hospital.php" method="post" role="form" class="php-signup-form">
      <div class="input-box"><h5> Hospital Name: </h5>
      <input type="text" name="name" id="name" class="form-control" placeholder="Enter your Hospital name" required>
      </div>
      <div class="input-box"><h5> Enter your Email: </h5>
      <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Enter your email" required>
      </div>
     
      <div class="input-box"><h5> Contact Number: </h5>
      <input type="tel" id="contact_number" name="contact_number" pattern="[0-9]{11}" placeholder="Enter 11-digit number" required>
      </div>
      <div class="input-box"><h5> Location: </h5>
      <input type="text" name="location" id="location" class="form-control" placeholder="location" required>
      </div>
      <div class="now">
      <div class="policy">
      <input type="checkbox" required>
         <h3 style="margin-top: 8px;">I accept all terms & condition</h3>
            </div>
      <div class="input-box button">
        <input type="Submit" href="index.php" value="Register Now" >
      </div>
      <div class="text">
        <h3>Already have an account? <a href="login.php">Login now</a></h3>
      </div>
    </form>
  </div>
</div>

</body>
<?php
} else {
   echo $successMessage;
}
?>
</html>