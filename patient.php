<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];

    // Connecting to the Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "db_child";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Die if connection was not successful
    if (!$conn) {
        die("Sorry we failed to connect: " . mysqli_connect_error());
    } else {
        // Submit these to a database
        // Sql query to be executed
        $sql ="INSERT INTO `pateint` ( `name`, `dob`, `email`) VALUES ( '$name', '$dob', '$email')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Pateint detail has been submitted successfully!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>';
        } else {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> We are facing some technical issue and pateint deyail was not submitted successfully! We regret the inconvenience caused!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>';
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Child Vaccination System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .custom-bg {
            background-color: #e9f5fe;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Patient Vaccination System</h1>
        <hr>

        <!-- Child Details Form -->
        <h2>Patient Details</h2>
        <form action="patient.php" method="post" class="custom-bg p-4">
            <div class="form-group">
                <label for="child_name">Child Name:</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Full name" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" class="form-control" name="dob" id="dob" required>
            </div>
            <div class="form-group">
                <label for="parent_email">Parent Email:</label>
                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <!-- Vaccination Dates -->
        <h2>Vaccination Dates</h2>
        <p>Get notified through your account dashboard about upcoming vaccinations.</p>

        <!-- Book Hospital -->
        <h2>Book Hospital</h2>
        <p>Search the list of hospitals and book a schedule for vaccine dates.</p>
        <a href="hospital/hospital1/hospital1.php" class="btn btn-primary">View Hospital List 1</a>
        <a href="hospital/hospital2/Nova/hospital2.php" class="btn btn-primary">View Hospital List 2</a>

        <!-- Report of Vaccination Taken -->
        <h2>Report of Vaccination Taken</h2>
        <p>Get the report status of previous vaccinations of your child.</p>
        <a href="vaccination_report.php" class="btn btn-primary">View Vaccination Report</a>
    </div>
</body>
</html>
