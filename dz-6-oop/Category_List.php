<?php
include_once "./Category.php";

class Category_List
{
	private $categories;
	
	function __construct()
	{
		$this->categories = [];
	}
	
	function addCat($category): void
	{
		// получаем данные из файла
		$js_write = file_get_contents('./categories.json');
		$this->categories = json_decode($js_write); // декодируем из json
		$cat_obj = new Category($category);
		$serialize = serialize($cat_obj);  // сериализуем созданный объект
		
		$this->categories[] = $serialize;
		
		$js_save = json_encode($this->categories, JSON_UNESCAPED_UNICODE);
		file_put_contents('categories.json', $js_save);
	}
	
	function addProduct($prod_name, $prod_price, $category): void
	{
		$js_write = file_get_contents('./categories.json');
		$this->categories = json_decode($js_write);
		for ($i = 0; $i < count($this->categories); $i++) {
			$currentObj = unserialize($this->categories[$i]);
			if ($category == $currentObj->getCategoryName()) {
				$currentObj->addProducts($prod_name, $prod_price);
				$this->categories[$i] = serialize($currentObj);
			}
		}
		$js_save = json_encode($this->categories, JSON_UNESCAPED_UNICODE);
		file_put_contents('categories.json', $js_save);
	}
	
	function getCatList($catList = []):array
	{
		$js_write = file_get_contents('./categories.json');
		$this->categories = json_decode($js_write);
		foreach ($this->categories as $category) {
			$unserObj = unserialize($category);
			$catList[] = $unserObj->getCategoryName();
		}
		return $catList;
	}
	
	function showProductList($select): array
	{
		$prodList = [];
		$js_write = file_get_contents('./categories.json');
		$this->categories = json_decode($js_write);
		
		foreach ($this->categories as $category) {
			$unsObject = unserialize($category);
			if ($select == $unsObject->getCategoryName()) {
				$prodList[] = $unsObject->getCategoryProducts();
			}
			
		}
		return $prodList;
	}
}

$list = new Category_List();
