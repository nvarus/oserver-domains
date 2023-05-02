<?php
	include_once '../src/Category/Category.php';
	include_once '../src/Category/MonitorCategory.php';
	include_once '../src/Category/PhoneCategory.php';
	
	$Phones = new PhoneCategory("Phones");
	$Phones->setListProducts([
		["Name" => "iPhone 13", "Price" => 73790, "Description" => "Phone", "Brand" => "Apple",
			"CPU" => "Apple A15 Bionic", "RAM" => 4, "CountSIM" => 3, "HDD" => 128, "OS" => "IOS"],
		["Name" => "Galaxy S23", "Price" => 77490, "Description" => "Phone", "Brand" => "Samsung",
			"CPU" => "Qualcomm Snapdragon 8 Gen 2", "RAM" => 8, "CountSIM" => 1, "HDD" => 256, "OS" => "Android"],
		["Name" => "11 Light 5G", "Price" => 28990, "Description" => "Phone", "Brand" => "Xiaomi",
			"CPU" => "Snapdragon 778G", "RAM" => 8, "CountSIM" => 2, "HDD" => 128, "OS" => "Android"],
	]);
	
	$Monitors = new MonitorCategory("Monitors");
	$Monitors->setListProducts([
		["Name" => "MateView SE SSN-24", "Price" => 10990, "Description" => "Monitor", "Brand" => "Huawei",
			"Diagonal" => 23.8, "Frequency" => 75],
		["Name" => "P2723DE", "Price" => 48790, "Description" => "Monitor", "Brand" => "DELL", "Diagonal" => 27,
			"Frequency" => 60],
		["Name" => "34WP65C-B", "Price" => 35550, "Description" => "Monitor", "Brand" => "LG", "Diagonal" => 34,
			"Frequency" => 160],
	]);
	
	include_once '../src/ListCategory/ListCategory.php';
	$listCategory = new ListCategory([$Phones, $Monitors]);
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
		   list-style-type: none;
		   line-height: 30px;
		   font-size: 18px;
		   font-weight: 600;
		   width: 200px;
		   text-align: center;
		   border: 1px solid teal;
		   margin: 10px;
	   }

	   .category:hover {
		   background: teal;
		   color: white;

	   }

	   .category:active {
		   transform: scale(0.95);
	   }

	   .filter__name {
		   margin: 5px;
	   }

	   .filter__input {
		   line-height: 20px;
		   text-align: center;
		   margin: 5px 0 5px 0;
	   }

	   .apply-btn {
		   border: 1px solid teal;
		   margin-left: 5px;
		   line-height: 20px;
	   }

	   .apply-btn:hover {
	      background: teal;
	      color: white;
      }
	   .products {
		    font-weight: 600;
	      font-size: 20px;
		    margin-bottom: 10px;
	   }
	</style>
</head>
<body>

<?php
	// форма для выбора категории
	echo "<form action='' method='post'>";
	foreach ($listCategory->categoryList as $object) {
		$category = $object->getName();
		echo "<div><button class='category' name='category' value='$category'>$category</button></div>";
	}
	echo "<form>";
	
	// событие при нажатии кнопки категории
	if (!empty($_POST['category'])) {
		$cat = $_POST['category'];
		
		// вызываем метод getName
		foreach ($listCategory->categoryList as $object) {
			if ($object->getName() == $cat) {
				$object->showFilters();
			}
		}
	}
	
	// ловил значения выбранных фильтров
	if (isset($_POST['cat'])) {
		$cat = $_POST['cat'];
		// получаем список категорий
		$filter_list = [];
		// сохраняем список фильтров со значениями в массив
		foreach ($listCategory->categoryList as $item) {
			if ($item->getName() == $cat) {
				foreach ($item->getFilters() as $filter) {
					$filter_list[$filter] = $_POST[$filter];
				}
				// вызываем applyFilters для вывода отфильтрованных значений
				$item->applyFilters($filter_list);
			}
		}
	}
?>

</body>
</html>

