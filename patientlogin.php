
<?php
// Start the session
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from the form
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Connect to the database (replace with your database credentials)
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "hospital";

    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare a SQL statement to retrieve the user's hashed password based on the username
    $sql = "SELECT * FROM `logged` WHERE `email` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the user exists
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

            // Redirect to the admin panel or dashboard page
            header("Location: Admin panel/index.php");
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
<html>
<head>
    <title>Admin Login</title>
</head>
<body>
    <h2>Admin Login</h2>
    <form action="patientLogin.php" method="post">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
