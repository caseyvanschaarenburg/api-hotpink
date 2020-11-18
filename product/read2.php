<?php
session_start();
header("Access-Control-Allow-Origin: *");

include '../configg/db.php';
include '../objects/product.php';
$database = new Database();
$db = $database->getConnection();

$product = new Product($db);

$result = $product->read2();


$num = $result->num_rows;

if($num>0){
    $products_arr=array();
    while ($row = $result->fetch_assoc()){
        extract($row);
        $product_item=array(
            "id" => $id,
            "name" => $name,
            "description" => html_entity_decode($description),
            "price" => $price,
        );
        array_push($products_arr, $product_item);
    }
    http_response_code(200);
    echo json_encode($products_arr);
}
else{
    http_response_code(404);
    echo json_encode(
        array("message" => "Geen producten gevonden")
    );
}
?>