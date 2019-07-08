<html><title>Most Viewed Services</title><head>
<a href="index.php">
<img alt="OneCall" src="OneCall logo.png" align="left" ></a><br>
<h1 style="margin-right: 14px;">Most Viewed Services</h1>
</head>
<body bgcolor="black" text="white" style="text-align: center; background-image: url(bg.jpg);
  background-repeat: repeat-x; " >
  
<?php

if (isset($_COOKIE['services']))
{
    print(" <table><thead class='bold'><td>Services</td><td>Number of visits</td></thead>");
    arsort($_COOKIE['services']);
    
    foreach(array_slice($_COOKIE['services'],0,5) as $key=> $value)
    {
        print("<tr><td>$key</td><td>$value</td></tr>");
    }
    echo "</table>";
}else{
    echo "no services viewed yet";
}
?>
</div>