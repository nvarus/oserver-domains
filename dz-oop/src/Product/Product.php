<?php

class Product
{
	private string $name;
	private float $price;

	public function __construct($_name, $_price)
	{
		$this->name = $_name;
		$this->price = $_price;
	}
	/** Выводит массив продуктов на страницу */
	public static function getProduct(): void
	{
		$products = JsonFile::readInFile();
		foreach ($products as $product) {
			echo "<div>Name {$product->name};Price {$product->price}</div>";
		}
	}
	/**
	 * Принимает 2 параметра (массив объектов класса Product и название продукта),
	 * ищет по названию продукт в массиве и возвращает его
	 */
	public static function searchByName(array $array,string $prodName)
	{
		$finding = 0;
		foreach ($array as $item) {
			if (preg_match("/" . $prodName. "/i", $item->name)) {
				$finding = $item;
			}
		}
		if ($finding == 0) {
			return "По заданному значению не найдено ни одного продукта";
		} else return $finding;
	}
}