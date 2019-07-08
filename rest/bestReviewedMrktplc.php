<?php
include "../db_connect.php";

$sql = "select product_name, sum(rating) as total_rating from Ratings group by product_name order 
by sum(rating) desc limit 5";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
    $i = 0;
    while ($row = $result->fetch_assoc()) {
        $review[$i] = array(
            "productName" => $row["product_name"],
            "totalRating" => $row["total_rating"]
        );
        $i++;
    }
} else {
    $review = array(
        "productName" => null,
        "totalRating" => null
    );
}
echo json_encode($review);
?>
