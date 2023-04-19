<?php


// Connect to the MySQL database
$host = "localhost";
$user = "root";
$password = "";
$dbname = "property";

$conn = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());    
}

// Get the form data

$Fname = $_POST['First-Name'];
$Lname = $_POST['Last-Name'];
$EmailAdd = $_POST['Email'];
$Pass = $_POST['Phone-Number'];
$Locations = $_POST['Location'];
$Country = $_POST['Country'];

$password_hash = password_hash($_POST["Phone-Number"], PASSWORD_DEFAULT);


// Insert the data into the MySQL database
$sql = "INSERT INTO users (firstName, lastName, Emails, Locations, Country, Passwords) VALUES ('$Fname', '$Lname', '$EmailAdd', '$Locations', '$Country', '$Pass')";
if (mysqli_query($conn, $sql)) {
echo "New record created successfully";
$cookie_name = "user_id";
$cookie_value = "1234";
$cookie_expire = time() + (60 * 60 * 24 * 30); // Expires in 30 days
setcookie($cookie_name, $cookie_value, $cookie_expire, "/");
if (isset($_COOKIE["user_id"])) {
    // Retrieve user information from database using the unique identifier
    // Log the user in automatically
}

} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);












$username = $_POST['First-Name'];
$password = $_POST['Phone-Number'];

// Connect to MySQL database
$mysqli = new mysqli("localhost", "root", "");

// Check connection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

// Create new database for user
if ($mysqli->query("CREATE DATABASE $username") === TRUE) {
    // Create new user table in database
    $mysqli->select_db($username);
    $mysqli->query("CREATE TABLE users (id INT AUTO_INCREMENT PRIMARY KEY, username VARCHAR(30) NOT NULL, passwords VARCHAR(30) NOT NULL)");
    $mysqli->query("INSERT INTO users (username, passwords) VALUES ('$username', '$password')");
    echo "New database created successfully";
} else {
    echo "Error creating database: " . $mysqli->error;
}

$mysqli->close();   
?>