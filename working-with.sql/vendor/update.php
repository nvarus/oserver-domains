<?php
	require_once ('../config/connect.php');
	
	$id = $_POST['hID'];
	$name = $_POST['name'];
	$text = $_POST['text'];
	$price = $_POST['price'];
	
	mysqli_query($connect, "
		UPDATE `products`
		SET `prod_name` = '$name', `prod_text` = '$text', `price` = '$price'
		WHERE `prod_id` = '$id'");
	
	header('location: /');