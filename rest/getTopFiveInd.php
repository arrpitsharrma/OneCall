<?php
include "../db_connect.php";

$data = json_decode(file_get_contents("php://input"));

$companyName = $data->companyName;

$sql = "select product_name, rating from Ratings where company_name= '" . $companyName . " order by rating desc limit 5";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
    $i = 0;
    while ($row = $result->fetch_assoc()) {
        $review[$i] = array(
            "productName" => $row["product_name"],
            "rating" => $row["rating"]
        );
        $i++;
    }
    
} else {
    $review = null;
}
echo json_encode($review);
?>