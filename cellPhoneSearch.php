
<html><title>Search Results</title><head>
<a href="index.php">
<img alt="OneCall" src="OneCall logo.png" align="left" ></a><br>
<h1 style="    margin-right: 193px;">Search Results</h1>
</head>
<body bgcolor="black" text="white" style="text-align: center;background-image: url(bg.jpg);
  background-repeat: repeat-x;"">
  <div style="     float: left;
    margin-left: 340px;

  "><?php
include "db_connect.php";
$fn = $_GET["cellphone"];
$sql = "SELECT first_name, last_name, email, home_add, home_phone, cell_phone FROM user where cell_phone LIKE '%". $fn . "%'";
$result = mysqli_query($conn, $sql);

/* if (mysqli_num_rows($result) > 0) {
 // output data of each row
 while($row = mysqli_fetch_assoc($result)) {
 echo "First Name: " . $row["first_name"]. " Last Name: " . $row["last_name"]. "Email " . $row["email"]. "<br>";
 }
 } else {
 echo "0 results";
 } */
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> First Name: " . $row["first_name"]. "<br>". " Last Name: " . $row["last_name"]."<br>". " Email: " . $row["email"] ."<br>". "Home Address: " . $row["home_add"] ."<br>". "Home Phone: " . $row["home_phone"] . "<br>" . "Cell Phone: " . $row["cell_phone"] . "<br>";
    }
} else {
    echo "0 results";
}
echo "<br> <a href='users.php' style='color: white'>Click here</a> to go to Users page";