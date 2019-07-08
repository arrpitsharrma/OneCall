<?php
$ch = curl_init("http://54.241.169.38/rest/read.php");
$fp = fopen("/var/www/html/rest/myUsers.txt", "w");

curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);
curl_close($ch);
fclose($fp);
?>

<html>
<title>All Users</title>
<head>
<a href="index.php"> <img alt="OneCall" src="../OneCall logo.png"
	align="left"></a>
<br>
<br>
<h1 style="margin-right: 193px;">Registered users</h1>
</head>
<body bgcolor="black" text="white"
	style="text-align: center; background-image: url(../bg.jpg); background-repeat: repeat-x;">
	<?php
$data = json_decode(file_get_contents("myUsers.txt"));
// print_r($data);
$records = $data->records;
echo "<div 
   style='
    float: left;
    margin-left: 70px;
    '
>
<head>
<style>

body
{
    counter-reset: Serial;           /* Set the Serial counter to 0 */
}

.auto-index td:first-child:before
{
  counter-increment: Serial;      /* Increment the Serial counter */
  content: counter(Serial); /* Display the counter */
}

#users {
  font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#users td, #users th {
color:black;
  border: 1px solid #ddd;
  padding: 8px;
}

#users tr:nth-child(even){background-color: #f2f2f2;}

#users tr:hover {background-color: #ddd;}

#users th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>

<table id='users' class='auto-index'>
  <tr>
 <th>Sr No.</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
<th>Home Address</th>
<th>Home Phone</th>
<th>Cell Phone</th>
  </tr>";
foreach ($records as $record) {
    echo "<tr><td></td><td>" . $record->first_name . '</td><td>' . $record->last_name . '</td><td>'
      . $record->email . '</td><td>'
    . $record->home_add . '</td><td>'
    . $record->home_phone . '</td><td>'
    . $record->cell_phone . '</td>';
}
echo "</div>";
?>
</body>
</html>