<?php

class User
{

    // database connection and table name
    private $conn;

    private $table_name = "user";

    // object properties
    public $first_name;

    public $last_name;

    public $email;

    public $home_add;

    public $home_phone;

    public $cell_phone;

    // constructor with $db as database connection
    public function __construct($db)
    {
        $this->conn = $db;
    }

    // read users
    function read()
    {
        $conn = new mysqli("onecall.cezmznhjuynv.us-west-1.rds.amazonaws.com", "root", "mypassword", "onecalldb");

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT first_name, last_name, email, home_add, home_phone, cell_phone FROM user";

        $result = mysqli_query($conn, $sql);
        return $result;
    }
}