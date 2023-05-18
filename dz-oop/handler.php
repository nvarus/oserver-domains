<?php
include_once "./src/JsonFile/JsonFile.php";
include_once "./src/Product/Product.php";

// принимаем AJAX запрос
$postData = file_get_contents('php://input');
$data = json_decode($postData, true);


if (isset($data["prod_name"])) {
	$newProduct = new Product($data["prod_name"], $data["prod_price"]);
	JsonFile::saveInFile($newProduct);
}

if (isset($data["find_name"])) {

}