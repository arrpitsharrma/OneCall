<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once 'User.php';
include_once '../db_connect.php';


// read products will be here

// query products
$user = new User($conn);
$stmt = $user->read();
$num = $stmt->num_rows;

// check if more than 0 record found
if ($num > 0) {

    // products array
    $users_arr = array();
    $users_arr["records"] = array();

    // retrieve our table contents
    // fetch() is faster than fetchAll()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
    while ($row = $stmt->fetch_assoc()) {
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);

        $user_item = array(
            "first_name" => $first_name,
            "last_name" => $last_name,
            "email" => $email,
            "home_add" => $home_add,
            "home_phone" => $home_phone,
            "cell_phone" => $cell_phone
        );

        array_push($users_arr["records"], $user_item);
    }

    // set response code - 200 OK
    http_response_code(200);

    // show products data in json format
    echo json_encode($users_arr);
} // no products found will be here

else {

    // set response code - 404 Not found
    http_response_code(404);

    // tell the user no products found
    echo json_encode(array(
        "message" => "No products found."
    ));
}