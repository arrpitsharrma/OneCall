<?php 
session_start();
include_once 'gpConfig.php';
$authUrl = $gClient->createAuthUrl();
if (!isset($_SESSION['allowed'])){
    header('Location: ' . filter_var($authUrl, FILTER_SANITIZE_URL));
}
if(isset($_GET['code'])){
    $gClient->authenticate($_GET['code']);
    $_SESSION['token'] = $gClient->getAccessToken();
    header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
}
if (isset($_SESSION['token'])) {
    $gClient->setAccessToken($_SESSION['token']);
    $_SESSION["allowed"]=true;
    $gpUserProfile = $google_oauthV2->userinfo->get();
    $email=$gpUserProfile['email'];
    setcookie("email",$email);
    setcookie("allowed",True);
    // $_COOKIE["email_id"]=$gpUserProfile['gender'];
}
if(!isset($_COOKIE["all_companies_visited_pages"])){
    $count_all=0;
    setcookie("count_all",$count_all);
    setcookie("all_companies_visited_pages[0]","abc");
}

?>

<html><title>Products and Services</title><head>
<a href="index.php">
<img alt="OneCall" src="OneCall logo.png" align="left" ></a><br>
<h1 style="margin-right: 14px;">Products and Services</h1>
</head>
<body bgcolor="black" text="white" style="text-align: center; background-image: url(bg.jpg);
  background-repeat: repeat-x;">

<p style="margin-left: 175px;">
1. <a href="flooring.php" style="color: white">Flooring</a> <br>
<br>2. <a href="whitewashing.php" style="color: white">Whitewashing<br>
<br>3.<a href="furnishing.php" style="color: white">Furniture Enhancements<br>
<br>4. <a href="homeDecoration.php" style="color: white">Home Decoration<br>
<br>5.<a href="electricityConnection.php" style="color: white">Electricity Connection / Repairment<br>
<br>6. <a href="deckOrPorch.php" style="color: white">Deck or Porch<br>
<br>7.<a href="ceiling.php" style="color: white">Ceiling Fixes<br>
<br>8.<a href="lawncare.php" style="color: white">Lawncare and Sprinklers<br>
<br>9.<a href="plumbing.php" style="color: white">Plumbing<br>
<br>10.<a href="unclogToilet.php" style="color: white">Unclog Toilet
</p>
<a href="newRecentlyVisited.php" style="color:white;">Click here</a> to view last 5 visited Products / Services <br>
<a href="newMostVisited.php" style="color: white">Click here</a> to view most visited 5 Products / Services

</body></html>