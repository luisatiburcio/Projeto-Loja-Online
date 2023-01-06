<?php

$host = "run/mysql/mysql.sock";
$username = "root";
$password = "root";
$dbname = "db_store";

$conn = new mysqli(null, $username, $password, $dbname, 8080);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$all_products = array();
$sql = "SELECT * FROM product";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $all_products[] = $row;
    }
}

$all_categories = array();
$sql = "SELECT * FROM category";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $all_categories[] = $row;
    }
}

$all_users = array();
$sql = "SELECT * FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $all_users[] = $row;
    }
}

$all_orders = array();
$sql = "SELECT * FROM orders";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $all_orders[] = $row;
    }
}

?>
