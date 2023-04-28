<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<style>
		table {
			width: 800px;
		}
		th {
			border: 1px solid black;
			padding: 5px;
		}
	</style>
</head>
<?php
	require_once "./config/connect.php";
?>
<body>
<h2>Список товаров</h2>


	<table>
		<tr>
			<th>id</th>
			<th>Title</th>
			<th>Description</th>
			<th>Price</th>
			<th>Update</th>
		</tr>
		<?php
	$products = mysqli_query($connect, "SELECT * FROM `products`");
	$products = mysqli_fetch_all($products);
			foreach ($products as $prod) {
		?>
		<tr>
			<th><?= $prod[0]?> </th>
			<th><?= $prod[1]?></th>
			<th><?= $prod[2]?></th>
			<th><?= $prod[3]?> $</th>
			<th><a href='vendor/update_form.php?id=<?= $prod[0] ?>'>Update</a></th>
			<th><a href='vendor/delete_form.php?id=<?= $prod[0] ?>'>Delete</a></th>
		</tr>
				<?php
			}
		?>
	

</table>
<form action="./vendor/create.php" method="post">
	<input type="text" name="name" placeholder="ИМЯ"><br>
	<input type="text" name="text" placeholder="ТЕКСТ"><br>
	<input type="number" name="price" placeholder="ЦЕНА"><br>
	<button type="submit">Send</button>
</form>
</body>
</html>