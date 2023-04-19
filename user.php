<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "property";

 $conn = mysqli_connect($servername, $username, $password, $dbname);
 
if(isset($_Post['submit'])){
     $name = $_POST['names'];
 $email = $_POST['emails'];
 $mobile = $_POST['mobiles'];
 $password = $_POST['passwords'];

 //Step 4: Sanitize data
 $name = mysqli_real_escape_string($conn, $name);
 $email = mysqli_real_escape_string($conn, $email);
 $mobile = mysqli_real_escape_string($conn, $mobile);
 $password = mysqli_real_escape_string($conn, $password);

    $sql = "INSERT INTO crud (names, email, mobile, passwords) VALUES ('$name', '$email', '$mobile', '$password')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "data inserted successfully";
    }else{
        die(mysqli_error($con));
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form method="post" id="myForm">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" aria-describedby="Enter Your Name" name="names">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputPassword1" name="emails">
            </div>
            <div class=" mb-3">
                <label for="exampleInputPassword1" class="form-label">Mobile</label>
                <input type="tel" class="form-control" id="exampleInputPassword1" name="mobiles">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="passwords">
            </div>
            <button type="submit" class="btn btn-primary" name="submit" onclick="redirectToPage()">Submit</button>
        </form>
    </div>


















    <script>
    // Add an event listener to the form submit event
    document.getElementById("myForm").addEventListener("submit", function(event) {
        // Prevent the form from submitting normally
        event.preventDefault();

        // Get the form data
        var formData = new FormData(document.getElementById("myForm"));

        // Create a new XMLHttpRequest object
        var xhr = new XMLHttpRequest();

        // Set the destination URL for the form data
        var url = "user.php";

        // Send the form data to the destination URL asynchronously
        xhr.open("POST", url, true);
        xhr.send(formData);

        // Redirect the user to the new page
        window.location.replace("display.php");
    });
    </script>
</body>
<?php

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
$name = $_POST['names'];
$email = $_POST['emails'];
$mobile = $_POST['mobiles'];
$password = $_POST['passwords'];

// Step 4: Sanitize data
$name = mysqli_real_escape_string($conn, $name);
$email = mysqli_real_escape_string($conn, $email);
$mobile = mysqli_real_escape_string($conn, $mobile);
$password = mysqli_real_escape_string($conn, $password);

// Step 5: Insert data into MySQL database
$sql = "INSERT INTO crud (names, email, mobile, passwords) VALUES ('$name', '$email', '$mobile', '$password')";

if (mysqli_query($conn, $sql)) {
  echo "";
} else {
  echo "Error inserting data: " . mysqli_error($conn);
}
// Step 6: Close connection
mysqli_close($conn);

}
?>
<script>
function redirectToPage() {
    window.location.href = "display.php";
}
</script>

</html>