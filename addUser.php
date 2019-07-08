<?php
include "db_connect.php";
$fname = $_GET["firstname"];
$lname = $_GET["lastname"];
$email = $_GET["email"];
$homephone = $_GET["homephone"];
$homeadd = $_GET["homeadd"];
$cellphone = $_GET["cellphone"];

$sql = "INSERT INTO user (first_name, last_name, email, home_phone, home_add, cell_phone)
VALUES ('$fname', '$lname', '$email', '$homephone', '$homeadd', '$cellphone')";

if ($conn->query($sql) === TRUE) {
    echo "<html>
<title>User created</title>
<head>
<a href='index.php'> <img alt='OneCall' src='OneCall logo.png'
	align='left'></a>
<br>
<h1 style='margin-right: 193px;'>User created</h1>
</head>
<body bgcolor='black' text='white'
	style='text-align: center; background-image: url(bg.jpg); background-repeat: repeat-x;''>
	<div style='    margin-right: 188px;
	'>
		New user created successfully <br>
		<a href='users.php' style='color: white'>Click here</a> to go to Users page

	</div>

</html>";
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
