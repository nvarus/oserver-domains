<style>
	.grid {
		display: grid;
		grid-template-columns: 200px 80px;
	}

	.grid > div {
		border: 1px solid gray;
		text-align: center;

	}
</style>
<?php
include_once "./Category.php";
include_once "./Category_List.php";

$postData = file_get_contents('php://input');
$data = json_decode($postData, true);

if (isset($data["cat_name"])) {
	$list->addCat($data["cat_name"]);
	echo $data["cat_name"];

} elseif (isset($data["prod-name"])) {
	$list->addProduct($data["prod-name"], $data["prod-price"], $data["category"]);
	echo $data["prod-name"];

} elseif (isset($data["select"])) {
	$prodList = $list->showProductList($data["select"]);
	echo "<div class='grid'>";
	echo "<div>Продукт</div>";
	echo "<div>Цена</div>";
	foreach ($prodList as $array) {
		if (is_array($array)) {
			foreach ($array as $item) {
				$key = $item["prod_name"];
				$value = $item["prod_price"];
				echo "<div>$key</div>";
				echo "<div>$value</div>";
			}
		} else {
			echo "<div>Товары не найдены<div/>";
		}
	}
	echo "<div/>";
}










