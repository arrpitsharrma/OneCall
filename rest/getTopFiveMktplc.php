<?php
include "../db_connect.php";

$sql = "select product_name, rating from Ratings order by rating desc limit 5";
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