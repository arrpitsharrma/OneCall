<html>
<a href="index.php">
<img alt="OneCall" src="OneCall logo.png" align="left" ></a><br>
</head>
<body bgcolor="black" text="white" style="text-align: center;background-image: url(bg.jpg);
  background-repeat: repeat-x;"">
    <body>
        <h1 style="    margin-right: 148px;
        "><center></font>Search Users</center></h1>
        <?php
        include "db_connect.php"
?>
<div style="    float: left;
    margin-left: 213px;
">
<p><font color="orange">To search users by their first name, type the first name on the below search bar</font></p>
<form action="one.php">
  First name:<br>
  <input type="text" name="firstname" required><br><br>
  <input type="submit" value="Search">
</form>
<p><font color="orange">To search users by their last name, type the last name on the below search bar</font></p>
<form action="two.php">
  Last name:<br>
  <input type="text" name="lastname" required><br><br>
  <input type="submit" value="Search">
</form>
<p><font color="orange">To search users by their email, type the email on the below search bar</font></p>
<form action="third.php">
  Email:<br>
  <input type="text" name="email" required><br><br>
  <input type="submit" value="Search">
</form>
<p><font color="orange">To search users by their home phone, type the home phone on the below search bar</font></p>
<form action="homePhoneSearch.php">
  Home Phone:<br>
  <input type="text" name="homephone" required><br><br>
  <input type="submit" value="Search">
</form>
<p><font color="orange">To search users by their cell phone, type the cell phone on the below search bar</font></p>
<form action="cellPhoneSearch.php">
  Cell Phone:<br>
  <input type="text" name="cellphone" required><br><br>
  <input type="submit" value="Search">
</form>
</div>
<?php
$conn->close();
?>
    </body>
</html>