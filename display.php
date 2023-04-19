<?php
include 'connect.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Operator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <div class="container" style="margin-left:1%;">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a></button>
        <p>If Data Is Not Seen It Is Advised That You Refresh</p>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">SL No</th>
                    <th scope="col">Property Address</th>
                    <th scope="col">Tenant Name</th>
                    <th scope="col">Tenant Phone-Number</th>
                    <th scope="col">Tenant Email</th>
                    <th scope="col">Payment Date</th>
                    <th scope="col">AmountPay</th>
                    <th scope="col">NextRentDueDate</th>
                    <th scope="col">StartReminder</th>
                    <th scope="col">States</th>
                    <th scope="col">ReminderFrequency</th>
                    <th scope="col">TenantWorkAddress</th>
                    <th scope="col">Operations</th>

                </tr>
            </thead>
            <tbody>
                <?php
                // // Connect to the MySQL database
                $conn = mysqli_connect("localhost", "root", "", "property");
                
                // // Check for connection errors
                 if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
               }
                
                // // Query the database for data
                // $sql = "SELECT * FROM crud";
                // $result = mysqli_query($conn, $sql);
                
                // // Check for query errors
                // if (!$result) {
                //     die("Query failed: " . mysqli_error($conn));
                // }
                
                // // Display the data in an HTML table
                // echo "<table>";
                // echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>mobile</th><th>passwords</th></tr>";
                // while ($row = mysqli_fetch_assoc($result)) {
                //     echo "<tr><td>".$row['Id']."</td><td>".$row['names']."</td><td>".$row['email']."</td><td>".$row['mobile']."</td><td>".$row['password']."</td> </tr>";
                // }
                // echo "</table>";
                
                // // Close the database connection
                // mysqli_close($conn);
                $sql = "SELECT * FROM crud";
                $result=mysqli_query($conn,$sql);
                if ($result){
                    while( $row=mysqli_fetch_assoc($result)){
                        $id=$row['Id'];
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
                        echo '<tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$PropertyAddress.'</td>
                    <td>'.$TenantName.'</td>
                    <td>'.$TenantPhoneNumber.'</td>
                    <td>'.$TenantEmail.'</td>
                    <td>'.$PaymentDate.'</td>
                    <td>'.$AmountPay.'</td>
                    <td>'.$NextRentDueDate.'</td>
                    <td>'.$StartReminder.'</td>
                    <td>'.$States.'</td>
                    <td>'.$ReminderFrequency.'</td>
                    <td>'.$TenantWorkAddress.'</td>
                    <td>
                    <button class="btn btn-primary"><a href="property-management.php?updateid='.$id.'" style="color:white; text-decoration:none;">Update</a></button>
                    <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" style="color:white; text-decoration:none;">Delete</a></button>
                </td>
                </tr>';
                    };
                }
                
                ?>
            </tbody>
        </table>
    </div>






    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>