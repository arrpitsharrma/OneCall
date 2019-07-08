<html>
<title>Most opened Products / Services</title>
<head>
<a href="index.php"> <img alt="OneCall" src="OneCall logo.png"
	align="left"></a>
<br>
<h1 style="margin-right: 14px;">Most opened Products / Services</h1>
</head>
<body bgcolor="black" text="white"
	style="text-align: center; background-image: url(bg.jpg); background-repeat: repeat-x;">

<?php
$timeDiff1 = null;
if (isset($_COOKIE["Flooring2"])) {
    $var = $_COOKIE["Flooring2"];
    $timeDiff1 = $var;
}
$timeDiff2 = NULL;
if (isset($_COOKIE["Whitewashing2"])) {
    $var = $_COOKIE["Whitewashing2"];
    $timeDiff2 = $var;
}
$timeDiff3 = NULL;
if (isset($_COOKIE["Furnishing2"])) {
    $var = $_COOKIE["Furnishing2"];
    $timeDiff3 = $var;
}
$timeDiff4 = NULL;
if (isset($_COOKIE["HomeDecoration2"])) {
    $var = $_COOKIE["HomeDecoration2"];
    $timeDiff4 = $var;
}
$timeDiff5 = NULL;
if (isset($_COOKIE["ElectricityConnection2"])) {
    $var = $_COOKIE["ElectricityConnection2"];
    $timeDiff5 = $var;
}
$timeDiff6 = NULL;
if (isset($_COOKIE["DeckorPorch2"])) {
    $var = $_COOKIE["DeckorPorch2"];
    $timeDiff6 = $var;
}
$timeDiff7 = NULL;
if (isset($_COOKIE["Ceiling2"])) {
    $var = $_COOKIE["Ceiling2"];
    $timeDiff7 = $var;
}
$timeDiff8 = NULL;
if (isset($_COOKIE["Lawncare2"])) {
    $var = $_COOKIE["Lawncare2"];
    $timeDiff8 = $var;
}
$timeDiff9 = NULL;
if (isset($_COOKIE["Plumbing2"])) {
    $var = $_COOKIE["Plumbing2"];
    $timeDiff9 = $var;
}
$timeDiff10 = NULL;
if (isset($_COOKIE["UnclogToilet2"])) {
    $var = $_COOKIE["UnclogToilet2"];
    $timeDiff10 = $var;
}
$cookieArr = array(
     "Flooring" => $timeDiff1,
     "Whitewashing" => $timeDiff2,
     "Furnishing" => $timeDiff3,
     "Home Decoration" => $timeDiff4,
     "Electricity Connection" => $timeDiff5,
     "Deck or Porch" => $timeDiff6,
     "Ceiling" => $timeDiff7,
     "Lawncare" => $timeDiff8,
     "Plumbing" => $timeDiff9,
     "Unclog Toilet" => $timeDiff10
);
if (! empty($cookieArr)) {
    arsort($cookieArr);
    print_r($cookieArr);
    echo "<br>";
    //$newArr = array_slice($cookieArr, 0, 5, true);
   // print_r($newArr);
    foreach ($cookieArr as $key => $value) {
        if ($key != null) {
            echo $key . "<br>";
        }
        
    }
}
$newArr2 = null;
if (!empty($newArr)) {
    foreach ($newArr as $key => $value) {
        if ($key != null) {
            $newArr2[$key] = $value;
        }
    }
    print_r($newArr2);
    if (!empty($newArr2)){
        foreach ($newArr2 as $key => $value) {
            echo $value . "<br>";
        }
    }
}

?>
</body>
</html>
