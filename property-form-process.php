<html>
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
    <div style="background-color: #6682d2;" id="firstBox">
        <p style="color:white; margin-left:20%;" ;>Tenant Address: <?php echo   $_POST['propertyplace']; ?></p>
        <button onclick="showPeople()"> See
            More</button>
    </div>
    <div style="display:none; background-color: #6682d2; color:white;" ; id="user">
        <p>Tenant Address: <?php echo   $_POST['propertyplace']; ?></p>
        <p>State: <?php echo   $_POST['states_of_nigeria']; ?></p>
        <p>Tenant Name: <?php echo   $_POST['tenant-name']; ?></p>
        <p>Tenant Phone-Number: <?php echo   $_POST['phone-tenant']; ?></p>
        <p>Tenant Email: <?php echo   $_POST['email-tenant']; ?></p>
        <p>Tenant Work-Address: <?php echo   $_POST['work-address']; ?></p>
        <p>Payment Date: <?php echo   $_POST['payment-date']; ?></p>
        <p>Next Rent Due Date: <?php echo   $_POST['rent-due']; ?></p>
        <p>Start Reminder: <?php echo   $_POST['reminder-start']; ?></p>
        <p>Reminder Frequency: <?php echo   $_POST['reminder-dates']; ?></p>
        <button onclick="dontpeople()">See Less</button>
    </div>
    <script>
    function showPeople() {
        var box = document.getElementById("user");
        var firstBox = document.getElementById("firstBox")
        box.style.display = "block";
        firstBox.style.display = "none";
    }

    function dontpeople() {
        var box = document.getElementById("user");
        var firstBox = document.getElementById("firstBox")
        box.style.display = "none";
        firstBox.style.display = "block";
    }
    </script>

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
$propertyAddress = $_POST['propertyplace'];
$States = $_POST['states_of_nigeria'];
$tenantName = $_POST['tenant-name'];
$tenantPhoneNumber = $_POST['phone-tenant'];
$tenantEmail = $_POST['email-tenant'];
$tenantWorkAddress = $_POST['work-address'];
$paymentDate = $_POST['payment-date'];
$amountPay = $_POST['tenant-pay'];
$nextRentDueDate = $_POST['rent-due'];
$startReminder = $_POST['reminder-start'];
$reminderFrequency = $_POST['reminder-dates'];


// Insert the data into the MySQL database
$sql = "INSERT INTO propertforms (propertyAddress, States, tenantName, tenantPhoneNumber, tenantEmail, tenantWorkAddress, paymentDate, amountPay, nextRentDueDate, startReminder, reminderFrequency) VALUES ('$propertyAddress', '$States', '$tenantName', '$tenantPhoneNumber', '$tenantEmail', '$tenantWorkAddress', '$paymentDate', '$amountPay', '$nextRentDueDate', '$startReminder', '$reminderFrequency')";
if (mysqli_query($conn, $sql)) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn); } mysqli_close($conn); 
?>

</html>