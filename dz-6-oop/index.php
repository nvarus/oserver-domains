<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Category</title>
</head>
<?php
include_once "./Category.php";
include_once "./Category_List.php";
?>
<body>

<h3>Категории</h3>
<div>
	<select name="" id="cat-select" onchange="showProducts()">
		<option value="null" selected="true" disabled="disabled">Выберите категорию</option>
		<?php
		$category_list = $list->getCatList();
		foreach ($category_list as $item) {
			echo "<option>$item</option>";
		}
		?>
	</select>
</div>
<br>
<input type="text" id="categories" placeholder="Добавить категорию">
<button name="add-categories" onclick="addCategories()">Добавить</button>
<br/><br/>


<br/><br/>
<hr/>


<h3>Товары</h3>
<input type="text" id="prod-name" placeholder="Название">
<input type="text" id="prod-price" placeholder="Цена">
<button id="add-product" name="add-product" onclick="addProduct()">Добавить</button>


<h4 id="result-cat"></h4>
<?php
include_once "./handler.php";
?>

<script>
	const ajax = createAjaxObject();

	// создаем AJAX объект
	function createAjaxObject() {
		let ajax = null;
		try {
			ajax = new XMLHttpRequest();
			console.log("запускаю XMLHttpRequest")
		} catch (e) {
			try {
				ajax = new ActiveXObject("MicrosoftXMLHTTP");
				console.log("запускаю MicrosoftXMLHTTP")
			} catch (e) {
				alert("AJAX не поддерживается вашим браузером!")
				return false;
			}
		}
		return ajax;
	}
	function addCategories() {
		let catName = document.getElementById("categories").value;
		const response = document.getElementById("result-cat");
		const select = document.querySelector('#cat-select');
		select.innerHTML += `<option>${catName}</option>`;
		select.value = catName;
		ajaxRequest({"cat_name": catName});
	}

	function addProduct() {
		let prodName = document.getElementById("prod-name");
		let prodPrice = document.getElementById("prod-price");
		let category = document.getElementById("cat-select");

		ajaxRequest({"prod-name": prodName.value,"prod-price": prodPrice.value,"category": category.value});
		prodName.value = '';
		prodPrice.value = '';
	}

	function showProducts() {
		const select = document.querySelector('#cat-select').value;
		ajaxRequest({"select": select});
	}

	function ajaxRequest(objectValues) {
		let json = JSON.stringify(objectValues)
		if (ajax.readyState === 4 || ajax.readyState === 0) {
			ajax.open("POST", "handler.php", true);
			ajax.setRequestHeader("Content-type", 'application/json; charset=utf-8');
			ajax.send(json);
			ajax.onreadystatechange = () => {
				if (ajax.readyState === 4 && ajax.status === 200) {
					document.getElementById("result-cat").innerHTML = ajax.responseText;
				}
			}
		}

	}
</script>

</body>
</html>


