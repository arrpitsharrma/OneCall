<html>

<title>Create User</title><head>
<a href="index.php">
<img alt="OneCall" src="OneCall logo.png" align="left" ></a><br>
</head>
<body bgcolor="black" text="white" style="text-align: center;background-image: url(bg.jpg);
  background-repeat: repeat-x;"">
  <div style="     margin-left: 380px;
    float: left;

  ">    <head>
        
    </head>
    
    <body>
        <h1><center></font>Create User</center></h1>
        <?php
        include "db_connect.php"
?>
<div>
<form action="addUser.php">
  First name:<br>
  <input type="text" name="firstname" maxlength="40" required><br><br>
  Last name:<br>
  <input type="text" name="lastname" maxlength="40" required><br><br>
  Email:<br>
  <input type="email" name="email" maxlength="40" required><br><br>
  Home Address:<br>
  <input type="text" pattern="[a-zA-Z0-9]{1,25}"  maxlength="400" name="homeadd" oninvalid="setCustomValidity('Please enter the address in valid format. Only digits and alphabets are allowed')" onchange="try{setCustomValidity('')}catch(e){}"><br><br>
  Home Phone:<br>
  <input type="text" pattern="\d*" name="homephone"  maxlength="12" required oninvalid="setCustomValidity('Please enter the phone number in valid format. Only digits are allowed')" onchange="try{setCustomValidity('')}catch(e){}"><br><br>
  Cell Phone:<br>
  <input type="text" pattern="\d*" name="cellphone"  maxlength="12" required oninvalid="setCustomValidity('Please enter the phone number in valid format. Only digits are allowed')" onchange="try{setCustomValidity('')}catch(e){}"><br><br>
  <input type="submit" value="Create User">
</form>
</div>
<?php
$conn->close();
?>
    </body>
</html>