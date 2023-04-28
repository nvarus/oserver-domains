<?php
include_once '../src/ListCategory/ListCategory.php';
include_once '../src/Category/Category.php';
include_once '../src/Category/MonitorCategory.php';
include_once '../src/Category/PhoneCategory.php';
include_once './handler.php';

$Phones = new PhoneCategory("Phones", $listCategory);
$Monitors = new MonitorCategory("Monitors", $listCategory);


$Phones->setListProducts([
		  ["Name" => "iPhone 13", "Price" => 73790, "Description" => "Phone", "Brand" => "Apple", "CPU" => "Apple A15 Bionic", "RAM" => 4, "CountSIM" => 3, "HDD" => 128, "OS" => "IOS"],
		  ["Name" => "Galaxy S23", "Price" => 77490, "Description" => "Phone", "Brand" => "Samsung", "CPU" => "Qualcomm Snapdragon 8 Gen 2", "RAM" => 8, "CountSIM" => 1, "HDD" => 256, "OS" => "Android"],
		  ["Name" => "11 Light 5G", "Price" => 28990, "Description" => "Phone", "Brand" => "Xiaomi", "CPU" => "Snapdragon 778G", "RAM" => 8, "CountSIM" => 2, "HDD" => 128, "OS" => "Android"],
]);

$Monitors->setListProducts([
		  ["Name" => "MateView SE SSN-24", "Price" => 10990, "Description" => "Monitor", "Brand" => "Huawei", "Diagonal" => 23.8, "Frequency" => 75],
		  ["Name" => "P2723DE", "Price" => 48790, "Description" => "Monitor", "Brand" => "DELL", "Diagonal" => 27, "Frequency" => 60],
		  ["Name" => "34WP65C-B", "Price" => 35550, "Description" => "Monitor", "Brand" => "LG", "Diagonal" => 34, "Frequency" => 160],
]);

$listCategory->showCategories();
?>


<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<style>
		.category {
			cursor: pointer;
		}
	</style>
</head>
<body>

<?php



?>
<div id="result"></div>
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
	
	
	const showProducts = (phpFunction) => {
		document.querySelector("body").innerHTML += `<?php $Phones->showProducts(); ?>`;
		document.querySelector("body").innerHTML += `<?php $Monitors->showProducts(); ?>`;
	}
	
	const categoryClick = document.querySelectorAll('.category')
	categoryClick.forEach(item => {
		item.classList.remove('selected')
	});
	
	for (let elem of categoryClick) {
		elem.addEventListener('click', (e) => {
			e.target.classList.add('selected')
			let catName = e.target.id;
			ajaxRequest({"category": catName});
		});
		
	}

	function ajaxRequest(objectValues) {
		let json = JSON.stringify(objectValues)
		if (ajax.readyState === 4 || ajax.readyState === 0) {
			ajax.open("POST", "handler.php", true);
			ajax.setRequestHeader("Content-type", 'application/json; charset=utf-8');
			ajax.send(json);
			ajax.onreadystatechange = () => {
				if (ajax.readyState === 4 && ajax.status === 200) {
					document.getElementById("result").innerHTML = ajax.responseText;
				}
			}
		}

	}

</script>
</body>
</html>

