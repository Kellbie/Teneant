<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="kean.jpg">
    <title>Property-Management</title>
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

.First {
    border: none;
    outline: none;
    background-color: #e7e7ff;
    width: 105%;
    border-radius: 10px;
    height: 5vh;
    margin-left: -10%;
}

.dropbtn {
    border: none;
    outline: none;
    background-color: #e7e7ff;
    width: 355%;
    border-radius: 10px;
    height: 5vh;
    margin-left: -35%;
    margin-top: 5%;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 100px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

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

.form-label {
    font-family: "Roboto", sans-serif;
    margin-left: 2%;
}

.other-form {
    padding-top: 3%;
}

.property-form-inputs {
    height: 20%;
    outline: none;
    padding-top: 0.25%;
    width: 25%;
    padding-bottom: 0.25%;
    margin-left: 2.5%;
    border-radius: 0.5px;
    border: grey;
}

.input-labels {
    margin-top: 2%;
}
</style>

<body>
    <div id="leftbox">
        <img src="Kelltech.png" class="top-image" />
        <ul>
            <a href="dashboard.php"><button class="First">DashBoard</button></a>
            <div class="dropdown">
                <button class="dropbtn" style="background-color: #1f3f94; color: rgb(255, 255, 255);">Create
                    Task</button>
                <div class="dropdown-content">
                    <a href="property-management.html"
                        style="background-color: #1f3f94; color: rgb(255, 255, 255);">Property Management</a>
                    <a href="#">Event Management</a>
                    <a href="#">Career Management</a>
                    <a href="#">Health Management</a>
                    <a href="travel.html">Vacation Plan Management</a>
                    <a href="other-pro.html">Other Projects</a>
                </div>
            </div>
        </ul>
    </div>
    <!-- End of Nav -->

    <header style="background-color: #1f3f94; padding-top: 2%; padding-bottom: 2%; text-align: center;">
        <h1 style="color: white;">Project Management</h1>
    </header>

    <div class="property-div" id="property-box" style="display: block;">
        <h1 style="margin-left: 25%; margin-top: 2%;">Property 1</h1><br>
        <div class="property-div-form">

            <form method="post">
                <div>
                    <label class="form-label">Property Address <span style="color: red;">*</span> </label><input
                        class="property-form-inputs" required name="PropertyAddress">
                </div>

                <div style="margin-left: 70%; margin-top: -1.5%; margin-bottom: 2%;">
                    <label for="" style="margin-left: 5%;" class="form-label">State:</label>
                    <select name="state" id="select" required class="state-select">
                        <option selected hidden>Select A State</option>
                        <option>OTHERS</option>
                        <option>ABUJA FCT</option>
                        <option>ABIA</option>
                        <option>ADAMAWA</option>
                        <option>AKWA IBOM</option>
                        <option>ANAMBRA</option>
                        <option>BAUCHI</option>
                        <option>BAYELSA</option>
                        <option>BENUE</option>
                        <option>BORNO</option>
                        <option>CROSS RIVER</option>
                        <option>DELTA</option>
                        <option>EBONYI</option>
                        <option>EDO</option>
                        <option>EKITI</option>
                        <option>ENUGU</option>
                        <option>GOMBE</option>
                        <option>IMO</option>
                        <option>JIGAWA</option>
                        <option>KADUNA</option>
                        <option>KANO</option>
                        <option>KATSINA</option>
                        <option>KEBBI</option>
                        <option>KOGI</option>
                        <option>KWARA</option>
                        <option>LAGOS</option>
                        <option>NASSARAWA</option>
                        <option>NIGER</option>
                        <option>OGUN</option>
                        <option>ONDO</option>
                        <option>OSUN</option>
                        <option>OYO</option>
                        <option>PLATEAU</option>
                        <option>RIVERS</option>
                        <option>SOKOTO</option>
                        <option>TARABA</option>
                        <option>YOBE</option>
                        <option>ZAMFARA</option>
                    </select>
                </div>

                <div style="margin-bottom: 2%; width: 94.5%;">
                    <label class="form-label">Tenant Name <span style="color: red;">*</span> </label><input
                        style="width: 54%;" type="text" required class="property-form-inputs" name="TenantName">
                </div>

                <div style="margin-bottom: 2%; width: 103.5%;">
                    <label class="form-label">Tenant Phone-Number <span style="color: red;">*</span> </label><input
                        style="width: 45%;" type="tel" required class="property-form-inputs" name="TenantPhoneNumber">
                </div>

                <div style="margin-bottom: 2%; width: 94.2%;">
                    <label class="form-label">Tenant Email <span style="color: red;">*</span> </label><input
                        name="TenantEmail" style="width: 54.5%;" type="email" required class="property-form-inputs">
                </div>

                <div style="margin-bottom: 2%; width: 102.5%;">
                    <label class="form-label">Tenant Work-Address <span style="color: red;">*</span> </label><input
                        style="width: 46%;" type="text" class="property-form-inputs" name="TenantWorkAddress">
                </div>

                <div style="margin-bottom: 2%; width: 102.5%;">
                    <label class="form-label">Payment Date <span style="color: red;">*</span> </label><input
                        name="PaymentDate" style="width: 50%;" type="date" required class="property-form-inputs">
                </div>


                <div style="margin-bottom: 2%; width: 102.5%;">
                    <label class="form-label">Amount Pay <span style="color: red;">*</span> </label><input
                        style="width: 51%;" type="number" class="property-form-inputs" name="AmountPay">
                </div>

                <div style="margin-bottom: 2%; width: 102.5%;">
                    <label class="form-label">Next Rent Due Date <span style="color: red;">*</span> </label><input
                        style="width: 48%;" type="date" required class="property-form-inputs" name="NextRentDueDate">
                </div>

                <div style="margin-bottom: 2%; width: 102.5%;">
                    <label class="form-label">Start Reminder <span style="color: red;">*</span> </label><input
                        style="width: 50%;" type="date" required class="property-form-inputs" name="StartReminder">
                </div>

                <select name="ReminderFrequency" id="select" required>
                    <option selected hidden>Reminder Frequency</option>
                    <option>Monthly</option>
                    <option>Weekly</option>
                    <option>Daily</option>
                </select><br><br>

        </div>
        <button type="submit">Save</button>
        </form>

    </div>


</body>
<?php


  $formData = $_POST;
  $endpoint1 = 'property-display.html';
  $endpoint2 = 'property-management.php';
  
  $curl1 = curl_init($endpoint1);
  curl_setopt($curl1, CURLOPT_POST, true);
  curl_setopt($curl1, CURLOPT_POSTFIELDS, http_build_query($formData));
  curl_exec($curl1);
  
  $curl2 = curl_init($endpoint2);
  curl_setopt($curl2, CURLOPT_POST, true);
  curl_setopt($curl2, CURLOPT_POSTFIELDS, http_build_query($formData));
  curl_exec($curl2);





// Step 1: Connect to MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "property";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Step 3: Retrieve data from form
$PropertyAddress = $_POST['PropertyAddress'];
$TenantName = $_POST['TenantName'];
$TenantPhoneNumber = $_POST['TenantPhoneNumber'];
$TenantEmail = $_POST['TenantEmail'];
$TenantWorkAddress = $_POST['TenantWorkAddress'];
$PaymentDate = $_POST['PaymentDate'];
$AmountPay = $_POST['AmountPay'];
$NextRentDueDate = $_POST['NextRentDueDate'];
$StartReminder = $_POST['StartReminder'];
$ReminderFrequency = $_POST['ReminderFrequency'];
$state = $_POST['state'];

// Step 4: Sanitize data
// $name = mysqli_real_escape_string($conn, $name);
// $email = mysqli_real_escape_string($conn, $email);
// $mobile = mysqli_real_escape_string($conn, $mobile);
// $password = mysqli_real_escape_string($conn, $password);

// Step 5: Insert data into MySQL database
$sql = "INSERT INTO crud (PropertyAddress, TenantName, TenantPhoneNumber, TenantEmail, PaymentDate, AmountPay,
NextRentDueDate, StartReminder, States, ReminderFrequency, TenantWorkAddress) VALUES ('$PropertyAddress', '$TenantName',
'$TenantPhoneNumber', '$TenantEmail', '$PaymentDate', '$AmountPay', '$NextRentDueDate', '$StartReminder', '$state',
'$ReminderFrequency', '$TenantWorkAddress')";

if (mysqli_query($conn, $sql)) {
exit;

} else {
echo "Error inserting data: " . mysqli_error($conn);
}
// Step 6: Close connection
mysqli_close($conn);

}











// Start session
session_start();

// Connect to database server
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

// Check if user is logged in
if (isset($_SESSION['username'])) {
$username = $_SESSION['username'];

// Create database for user
$dbname = "user_" . $username;
$sql = "CREATE DATABASE $dbname";
if (mysqli_query($conn, $sql)) {
echo "Database created successfully";
} else {
echo "Error creating database: " . mysqli_error($conn);
}

// Use new database
mysqli_select_db($conn, $dbname);

// Display content for user
echo "<h1>Welcome, $username!</h1>";
// ...
} else {
// Redirect to login page
exit();
}

mysqli_close($conn);
?>

</html>