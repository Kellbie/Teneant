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

    <div class="property-div" id="property-box" style="display: none;">
        <h1 style="margin-left: 25%; margin-top: 2%;">Property 1</h1><br>
        <div class="property-div-form">
            <form id="first-form" method="post">
                <div>
                    <label class="form-label">Property Address <span style="color: red;">*</span> </label><input
                        class="property-form-inputs" required name="property-place">
                </div>

                <div style="margin-left: 70%; margin-top: -1.5%; margin-bottom: 2%;">
                    <label for="" style="margin-left: 5%;" class="form-label">State:</label>
                    <select name="states_of_nigeria" id="select" required class="state-select">
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
                        style="width: 54%;" type="text" required class="property-form-inputs" name="tenant-name">
                </div>

                <div style="margin-bottom: 2%; width: 103.5%;">
                    <label class="form-label">Tenant Phone-Number <span style="color: red;">*</span> </label><input
                        style="width: 45%;" type="tel" required class="property-form-inputs" name="phone-tenant">
                </div>

                <div style="margin-bottom: 2%; width: 94.2%;">
                    <label class="form-label">Tenant Email <span style="color: red;">*</span> </label><input
                        name="email-tenant" style="width: 54.5%;" type="email" required class="property-form-inputs">
                </div>

                <div style="margin-bottom: 2%; width: 102.5%;">
                    <label class="form-label">Tenant Work-Address <span style="color: red;">*</span> </label><input
                        style="width: 46%;" type="text" class="property-form-inputs" name="work-address">
                </div>


                <label class="form-label">Payment Date <span style="color: red;">*</span> </label><input
                    name="payment-date" style="width: 54%;" type="date" required class="property-form-inputs"><br>
                <label class="form-label">Amount Pay <span style="color: red;">*</span> </label><input
                    style="width: 54.5%;" type="number" class="property-form-inputs" name="tenant-pay"><br>
                <label class="form-label">Next Rent Due Date <span style="color: red;">*</span> </label><input
                    style="width: 48%;" type="date" required class="property-form-inputs" name="rent-due"><br>
                <label class="form-label">Start Reminder <span style="color: red;">*</span> </label><input
                    style="width: 58.5%;" type="date" required class="property-form-inputs">
                <select name="reminder-dates" id="select" required>
                    <option selected hidden>Reminder Frequency</option>
                    <option>Monthly</option>
                    <option>Weekly</option>
                    <option>Daily</option>
                </select><br><br>

        </div>
        </form>

    </div>
    <div id="hidden-div" style="display: block;">
        <h2 style="margin-left: 25%; margin-top: 2%;">Task Created Successfully</h2>
        <h4 style="margin-top: 2%; margin-left: 25%;">Property Address:<?php echo $_POST['property-place']; ?></h4>
        <button style="margin-left: 5%; margin-top: 1%;" id="see-more-btn" onclick="clickBtn2()">See More</button>

    </div>

    <div id="Another-div-hidden" style="display: none;">
        <h2 style="margin-left: 25%; margin-top: 2%;">Full Task</h2>
        <h4 style="margin-top: 2%; margin-left: 25%;">Property Address:<?php echo $_POST['property-place']; ?></h4>
        <h4 style="margin-top: 1%; margin-left: 25%;">State:<?php echo $_POST['states_of_nigeria']; ?></h4>
        <h4 style="margin-top: 1%; margin-left: 25%;">Tenant Name:<?php echo $_POST['tenant-name']; ?></h4>
        <h4 style="margin-top: 1%; margin-left: 25%;">Tenant Phone:<?php echo $_POST['phone-tenant']; ?></h4>
        <h4 style="margin-top: 1%; margin-left: 25%;">Tenant Email:<?php echo $_POST['email-tenant']; ?></h4>
        <h4 style="margin-top: 1%; margin-left: 25%;">Tenant Work-Address:<?php echo $_POST['work-address']; ?></h4>
        <h4 style="margin-top: 1%; margin-left: 25%;">Payment Date:<?php echo $_POST['payment-date']; ?></h4>
        <h4 style="margin-top: 1%; margin-left: 25%;">Amount Pay:<?php echo $_POST['tenant-pay']; ?></h4>
        <h4 style="margin-top: 1%; margin-left: 25%;">Next Rent Due Date:<?php echo $_POST['rent-due']; ?></h4>
        <button style="margin-left: 5%; margin-top: 1%;" onclick="clickBtn3()">See Less</button>
    </div>


</body>
<script>
function clickBtn() {
    const box = document.getElementById("property-box");
    const btn = document.getElementById("upload-btn");
    const divHidden = document.getElementById("hidden-div");
    box.style.display = "none";
    btn.style.display = "none";
    divHidden.style.display = "block";
}

function clickBtn2() {
    const box2 = document.getElementById("hidden-div");
    const btn2 = document.getElementById("see-more-btn")
    const divHidden2 = document.getElementById("Another-div-hidden")
    box2.style.display = "none";
    divHidden2.style.display = "block";
}

function clickBtn3() {
    const box2 = document.getElementById("hidden-div");
    const btn2 = document.getElementById("see-more-btn")
    const divHidden2 = document.getElementById("Another-div-hidden")
    box2.style.display = "block";
    divHidden2.style.display = "none";

}
</script>

<?php 
// Connect to the database
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'property';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Perform a SELECT query
$sql = "SELECT * FROM property";
$result = mysqli_query($conn, $sql);

// Print the data from the table
if (mysqli_num_rows($result) > 0) {
    echo'<body>';
    echo'<h1>Site Database</h1>';
    echo'<style>';
    echo'table, th, td {border:1px solid black;}';
    echo'table{margin-left:30%;}';
    echo'h1{margin-left:45%;}';
    echo'</style>';
    // Print the data in an HTML table
    echo '<table>';
        echo'<tr>';
        echo'<th>Property Address</th>';
        echo'<th>State</th>';
        echo'<th>Tenant Name</th>';
        echo'<th>Tenant Phone</th>';
        echo'<th>Tenant Email</th>';
        echo'<th>Tenant Work-Address</th>';
        echo'<th>Payment Date</th>';
        echo'<th>Amount Pay</th>';
        echo'<th>Next Rent Due Date</th>';
        echo'</tr>';
    while($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['PropertyAddress'] . '</td>';
        echo '<td>' . $row['States'] . '</td>';
        echo '<td>' . $row['TenantName'] . '</td>';
        echo '<td>' . $row['TenantPhone'] . '</td>';
        echo '<td>' . $row['TenantEmail'] . '</td>';
        echo '<td>' . $row['TenantWorkAddress'] . '</td>';
        echo '<td>' . $row['PaymentDate'] . '</td>';
        echo '<td>' . $row['AmountPay'] . '</td>';
        echo '<td>' . $row['NextRentDueDate'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
    echo'</body>';
} else {
    echo "No results found";
}

// Close the connection
mysqli_close($conn);

?>

</html>