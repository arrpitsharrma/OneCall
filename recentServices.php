<html><title>Recently opened Products / Services</title><head>
<a href="index.php">
<img alt="OneCall" src="OneCall logo.png" align="left" ></a><br>
<h1 style="margin-right: 14px;">Recently opened Products / Services</h1>
</head>
<body bgcolor="black" text="white" style="text-align: center; background-image: url(bg.jpg);
  background-repeat: repeat-x;">

<?php
$timeDiff1 = null;
if(isset($_COOKIE["Flooring"])) {
    $var = $_COOKIE["Flooring"];
    $timeDiff1 = time() - $var;
} 
$timeDiff2 = NULL;
if(isset($_COOKIE["Whitewashing"])) {
    $var = $_COOKIE["Whitewashing"];
    $timeDiff2 = time() - $var;
} 
$timeDiff3 = NULL;
if(isset($_COOKIE["Furnishing"])) {
    $var = $_COOKIE["Furnishing"];
    $timeDiff3 = time() - $var;
} 
$timeDiff4 = NULL;
if(isset($_COOKIE["HomeDecoration"])) {
    $var = $_COOKIE["HomeDecoration"];
    $timeDiff4 = time() - $var;
} 
$timeDiff5 = NULL;
if(isset($_COOKIE["ElectricityConnection"])) {
    $var = $_COOKIE["ElectricityConnection"];
    $timeDiff5 = time() - $var;
} 
$timeDiff6 = NULL;
if(isset($_COOKIE["DeckorPorch"])) {
    $var = $_COOKIE["DeckorPorch"];
    $timeDiff6 = time() - $var;
}
$timeDiff7 = NULL;
if(isset($_COOKIE["Ceiling"])) {
    $var = $_COOKIE["Ceiling"];
    $timeDiff7 = time() - $var;
} 
$timeDiff8 = NULL;
if(isset($_COOKIE["Lawncare"])) {
    $var = $_COOKIE["Lawncare"];
    $timeDiff8 = time() - $var;
} 
$timeDiff9 = NULL;
if(isset($_COOKIE["Plumbing"])) {
    $var = $_COOKIE["Plumbing"];
    $timeDiff9 = time() - $var;
} 
$timeDiff10 = NULL;
if(isset($_COOKIE["UnclogToilet"])) {
    $var = $_COOKIE["UnclogToilet"];
    $timeDiff10 = time() - $var;
} 
$cookieArr = array($timeDiff1=>"Flooring",$timeDiff2=>"Whitewashing",$timeDiff3=>"Furnishing",$timeDiff4=>"Home Decoration"
    ,$timeDiff5=>"Electricity Connection",$timeDiff6=>"Deck or Porch",$timeDiff7=>"Ceiling",$timeDiff8=>"Lawncare",$timeDiff9=>"Plumbing"
    ,$timeDiff10=>"Unclog Toilet");
ksort($cookieArr);
print_r($cookieArr);
$newArr = array_slice($cookieArr, 1, 5, true);
    foreach ($newArr as $key=>$value) {
        echo $value. "<br>";
    }
?>
</body></html>
