<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "property";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
};
$id= $_GET['updateid'];
$sql="SELECT * FROM crud WHERE Id='$id'";
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);
$PropertyAddress=$row['PropertyAddress'];
$TenantName=$row['TenantName'];
$TenantPhoneNumber=$row['TenantPhoneNumber'];
$TenantEmail=$row['TenantEmail'];
$PaymentDate=$row['PaymentDate'];
$AmountPay=$row['AmountPay'];
$NextRentDueDate=$row['NextRentDueDate'];
$StartReminder=$row['StartReminder'];
$States=$row['States'];
$ReminderFrequency=$row['ReminderFrequency'];
$TenantWorkAddress=$row['TenantWorkAddress'];

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
$PropertyAddress = $_POST['PropertyAddress'];
$TenantName = $_POST['TenantName'];
$TenantPhoneNumber = $_POST['TenantPhoneNumber'];
$TenantEmail = $_POST['TenantEmail'];
$PaymentDate = $_POST['PaymentDate'];
$AmountPay = $_POST['AmountPay'];
$NextRentDueDate = $_POST['NextRentDueDate'];
$StartReminder = $_POST['StartReminder'];
$state = $_POST['state'];
$ReminderFrequency = $_POST['ReminderFrequency'];
$TenantWorkAddress = $_POST['TenantWorkAddress'];

  // Update database record
  $sql = "UPDATE crud SET Id='$id', PropertyAddress='$PropertyAddress', TenantName='$TenantName', TenantPhoneNumber='$TenantPhoneNumber', TenantEmail='$TenantEmail', TenantWorkAddress='$TenantWorkAddress', PaymentDate='$PaymentDate', AmountPay='$AmountPay', NextRentDueDate='$NextRentDueDate', StartReminder='$StartReminder', ReminderFrequency='$ReminderFrequency', States='$state' WHERE id='$id'";

  if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    sleep(5);
    header('location:display.php');
  } else {
    echo "Error updating record: " . $conn->error;
  }
}

// Close database connection
$conn->close();
?>
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
                        class="property-form-inputs" required name="PropertyAddress"
                        value="<?php echo $PropertyAddress;?>">
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
                        style="width: 54%;" type="text" required class="property-form-inputs" name="TenantName"
                        value="<?php echo $name;?>">>
                </div>

                <div style="margin-bottom: 2%; width: 103.5%;">
                    <label class="form-label">Tenant Phone-Number <span style="color: red;">*</span> </label><input
                        style="width: 45%;" type="tel" required class="property-form-inputs" name="TenantPhoneNumber"
                        value="<?php echo $name;?>">>
                </div>

                <div style="margin-bottom: 2%; width: 94.2%;">
                    <label class="form-label">Tenant Email <span style="color: red;">*</span> </label><input
                        name="TenantEmail" style="width: 54.5%;" type="email" required class="property-form-inputs"
                        value="<?php echo $name;?>">>
                </div>

                <div style="margin-bottom: 2%; width: 102.5%;">
                    <label class="form-label">Tenant Work-Address <span style="color: red;">*</span> </label><input
                        style="width: 46%;" type="text" class="property-form-inputs" name="TenantWorkAddress"
                        value="<?php echo $name;?>">>
                </div>

                <div style="margin-bottom: 2%; width: 102.5%;">
                    <label class="form-label">Payment Date <span style="color: red;">*</span> </label><input
                        name="PaymentDate" style="width: 50%;" type="date" required class="property-form-inputs"
                        value="<?php echo $name;?>">>
                </div>


                <div style="margin-bottom: 2%; width: 102.5%;">
                    <label class="form-label">Amount Pay <span style="color: red;">*</span> </label><input
                        style="width: 51%;" type="number" class="property-form-inputs" name="AmountPay"
                        value="<?php echo $name;?>">>
                </div>

                <div style="margin-bottom: 2%; width: 102.5%;">
                    <label class="form-label">Next Rent Due Date <span style="color: red;">*</span> </label><input
                        style="width: 48%;" type="date" required class="property-form-inputs" name="NextRentDueDate"
                        value="<?php echo $name;?>">>
                </div>

                <div style="margin-bottom: 2%; width: 102.5%;">
                    <label class="form-label">Start Reminder <span style="color: red;">*</span> </label><input
                        style="width: 50%;" type="date" required class="property-form-inputs" name="StartReminder"
                        value="<?php echo $name;?>">>
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

</html>