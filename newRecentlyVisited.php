<html><title>Recently Viewed Services</title><head>
<a href="index.php">
<img alt="OneCall" src="OneCall logo.png" align="left" ></a><br>
<h1 style="margin-right: 14px;">Recently Viewed Services</h1>
</head>
<body bgcolor="black" text="white" style="text-align: center; background-image: url(bg.jpg);
  background-repeat: repeat-x; " >
  <div style="margin-left: 632px;"><?php

// $cookie_data=array_reverse($_COOKIE);
// foreach(array_slice($cookie_data,3,5) as $key=> $value){
//  print("<tr><td>$key</td><td>$value</td></tr>");
// }


if (isset($_COOKIE['services']))
{
    $final=array_reverse($_COOKIE['services']);
    echo "<table>";
    foreach(array_slice($final,0,5) as $key=> $value){
        print("<tr><td>$key</td></tr>");
    }
    echo "</table>";
    
}else{
    echo"no services viewed yet";
}


?>