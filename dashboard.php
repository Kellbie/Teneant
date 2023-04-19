<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css" />
</head>
<style>
* {
    margin: 0;
}

body {
    background-color: #f5f4f9;
}

#leftbox {
    float: left;
    background: #ffffff;
    width: 20%;
    height: 100vh;
}

.top-image {
    height: 20%;
    margin-left: 20%;
}

.arrow {
    float: right;
    height: 3vh;
}

.First {
    border: none;
    outline: none;
    background-color: #1f3f94;
    width: 105%;
    border-radius: 10px;
    height: 5vh;
    margin-left: -10%;
    color: rgb(255, 255, 255);
}

.Second {
    border: none;
    outline: none;
    background-color: #e7e7ff;
    width: 105%;
    border-radius: 10px;
    height: 5vh;
    margin-left: -10%;
    margin-top: 5%;
}

/* drop down start */
/* Dropdown Button */
.dropbtn {
    border: none;
    outline: none;
    background-color: #e7e7ff;
    width: 355%;
    border-radius: 10px;
    height: 5vh;
    margin-left: -34%;
    margin-top: 5%;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {
    background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: #1f3f94;
    color: rgb(255, 255, 255);
}

/* Drop down end */
</style>

<body>
    <div id="leftbox">
        <img src="Kelltech.png" class="top-image" />
        <ul>
            <a href="index.html"><button class="First">DashBoard</button></a>
            <div class="dropdown">
                <button class="dropbtn">Create Task</button>
                <div class="dropdown-content">
                    <a href="property-management.php">Property Management</a>
                    <a href="#">Event Management</a>
                    <a href="#">Career Management</a>
                    <a href="#">Health Management</a>
                    <a href="travel.html">Vacation Plan Management</a>
                    <a href="other-pro.html">Other Projects</a>
                </div>
            </div>
        </ul>
    </div>




    <header style="background-color: #1f3f94; padding-top: 2%; padding-bottom: 2%;">
        <h1 style="color: white; margin-left:10%; margin-left:25%;">Hello <?php echo $_POST['First-Name']; ?>
        </h1>
        <p style="color: white; margin-left:48%; font-size:20px;">Got a project or task? Click on the create
            task
            to select your project type.</p>
    </header>
    <table class="table table-striped" style="width:50vw; margin-left:35%;">
        <th>
            Property Management
        </th>
        <th>
            Vacation Planning
        </th>
        <th>
            Other Projects
        </th>

        <tr>
            <td><a href="property-display.html"><button type="button" class="btn btn-primary">Projects</button></a></td>
            <td><a href="vacations-display.html"><button type="button" class="btn btn-primary">Vacations</button></a>
            </td>
            <td><a href="other-display.html"><button type="button" class="btn btn-primary">Others</button></a></td>
        </tr>

    </table>
</body>
<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "property";

$conn = mysqli_connect($host, $user, $password, $dbname);

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

</html>