<?php
	include_once "./src/Product/Product.php";
	include_once "./src/JsonFile/JsonFile.php";
?>
<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<form action="" method="post">
	<input type="text" placeholder="Название" name="name" id="prod-name">
	<input type="text" placeholder="Цена" name="price" id="prod-price">
	<button type="submit" name="add" onclick="addProduct()">Добавить</button>
</form>


<?php
	Product::getProduct();

	echo "<br>";

?>

<form action="index.php" method="post">
	<input type="text" placeholder="Поиск продукта" name="find-name" id="find-name">
	<button type="submit" name="find-btn">Найти</button>
</form>

<?php
    include_once "./handler.php";
	if (isset($_POST["find-name"])) {
		$product = Product::searchByName(JsonFile::readInFile(), $_POST["find-name"]);
		echo "<pre>";
		print_r($product);
		echo "</pre>";
	}
?>
<div style="color: teal" id="result"></div>
<script src="./js/script.js"></script>
</body>
</html>