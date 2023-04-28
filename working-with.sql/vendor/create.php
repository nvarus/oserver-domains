<?php
	require_once "../config/connect.php";
	
	$name = $_POST["name"];
	$text = $_POST["text"];
	$price = $_POST["price"];

	var_dump($name, $text, $price);
	
	mysqli_query($connect,
		"INSERT INTO products (`prod_id`, `prod_name`, `prod_text`, `price`)
					VALUES (NULL, '$name', '$text', '$price')");
	
	header('location: /');