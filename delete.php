<?php
include "connect.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "property";

$conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];


    $sql = "DELETE FROM crud WHERE Id = $id";
    $result=mysqli_query($conn, $sql);
    if($result){
        // echo "Deleted successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>