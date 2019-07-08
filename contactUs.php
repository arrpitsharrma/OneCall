<html><title>Contact Us</title><head>
<a href="index.php">
<img alt="OneCall" src="OneCall logo.png" align="left" ></a>
</head>
<body bgcolor="black" text="white" style="text-align: center; margin-right: 245px; background-image: url(bg.jpg);
  background-repeat: repeat-x;"><br>
<H1>Contact Us</H1>
<div style="text-align: center; margin-right: 330px;float: right;">
<?php
$file = file_get_contents('./data.txt', FILE_USE_INCLUDE_PATH); //get contact information from data.txt file

$info = preg_replace("/\n/", "<br>", $file); //line by line execution of contact information
echo $info; // echo contact information on the web page
?></div>
</body></html>