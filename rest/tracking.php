<?php
include "../db_connect.php";
$data= json_decode(file_get_contents("php://input"));

$productName = $data->productName;
$companyName = $data->companyName;
$email = $data->email;

$sql = "INSERT INTO Tracking (email, product_name, company_name) VALUES ('$email','$productName', '$companyName')";

if ($conn->query($sql) === TRUE) {
    echo "True";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

/* if (mysqli_num_rows($result) > 0) {
 // output data of each row
 while($row = mysqli_fetch_assoc($result)) {
 echo "First Name: " . $row["first_name"]. " Last Name: " . $row["last_name"]. "Email " . $row["email"]. "<br>";
 }
 } else {
 echo "0 results";
 } */
