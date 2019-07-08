<?php session_start();?>
<html><title>Login</title><head>
<a href="index.php">
<img alt="OneCall" src="OneCall logo.png" align="left" ></a>
</head>
<body bgcolor="black" text="white" style="text-align: center; margin-right: 245px; background-image: url(bg.jpg);
  background-repeat: repeat-x;"><br>
<H1>Login</H1>
<div style="text-align: center; margin-right: 330px;float: right;">
<?php 
if(isset($_POST['Submit'])){
    $credentials = array('admin'=>'admin');
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    
    if(isset($credentials[$username]) && $credentials[$username] == $password){
        $_SESSION['userData']['userName'] = $credentials[$username];
        //$response="<ul><li>User A</li><li>User B</li><li>User C</li></ul>";
        header("location:loggedIn.php");
        exit;
    }else {
       $response = "<span style='color:red'>Invalid credentials</span>";
    }
}
?>

<table>
<form action="" method="post" name="loginForm">
<?php if(isset($response)){?>
<tr><td></td>
<td><?php echo $response?></td></tr>
<?php }?>
<tr><td>Username:</td><td><input type="text" name="username" /></td></tr>
<tr><td>Password:</td><td><input type="password" name="password"/><br></td></tr><br>
<tr><td></td><td><input type="submit" value="Login" name="Submit" class="Button3"/></td></tr>
</div></table>
</form></div>
</body></html>