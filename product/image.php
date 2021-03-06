<?php

session_start();
header("Access-Control-Allow-Origin: *");

include '../configg/db.php';
include '../objects/product.php';


$product_id = $_GET['productid'];
$database = new Database();
$db = $database->getConnection();

$product = new Product($db);

$result = $product->image($product_id);

$num = $result->num_rows;

if ($num > 0) {
    echo json_encode($result->fetch_assoc());
    http_response_code(200);
} else {
    http_response_code(404);
    echo json_encode(
        array("message" => "Geen producten gevonden")
    );
}



