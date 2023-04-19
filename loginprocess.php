<?php
// Establish a connection to the MySQL database
$conn = mysqli_connect('localhost', 'root', '', 'property');

// Retrieve the email and password entered by the user
$email = $_POST['Email'];
$password = $_POST['Phone-Number'];

// Retrieve the user's email and password from the database
$query = "SELECT * FROM users WHERE Emails = '$email'";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);

// Check if the email and password retrieved from the database match the user's input
if ($user && password_verify($password, $user['Passwords'])) {
   echo "it works";
} else {
  // Send an error message and stop the script
  die('Invalid email or password');
}
?>