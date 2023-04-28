<?php
	require_once "../config/connect.php";
	$product_id = $_GET['id'];
	$products = mysqli_query($connect, "SELECT * FROM `products` WHERE prod_id = $product_id");
	$products = mysqli_fetch_assoc($products);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<h3>Update Product</h3>
<form action="./update.php" method="post">
	<input type="hidden" name="hID" value="<?=$product_id?>">
	Name:<br>
	<input name="name" type="text" value="<?=$products['prod_name']?>"><br>
	Text:<br>
	<input name="text" type="text" value="<?=$products['prod_text']?>"><br>
	Price:<br>
	<input name="price" type="number" value="<?=$products['price']?>"><br><br>
	<button type="submit">Send</button>
</form>
</body>
</html>
