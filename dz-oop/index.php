<?php
	include_once "./src/Product/Product.php";
	include_once "./function.php";
	include_once "./src/JsonFile/JsonFile.php";
	include_once "./function.php";
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
	<input type="text" placeholder="Название" name="name">
	<input type="text" placeholder="Цена" name="price">
	<button type="submit" name="add" onclick="addProd()">Добавить</button>
</form>
<?php
	JsonFile::readInFile();
	
	function addProduct($products_json):void {
		$products_object = new Product($_POST['name'], $_POST['price']);
		JsonFile::saveInFile($products_object);
	}

?>

<script>
	const addProd = () => {
		document.querySelector('body').innerHTML += "<?php addProduct($products_json);?>"
	}
</script>
</body>
</html>