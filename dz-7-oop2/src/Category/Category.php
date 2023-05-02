<?php

class Category
{
	private string $name;
	public array $listProducts;
	protected array $filters;
	
	function __construct(string $_name, object $_list, $_price = "Price")
	{
		$this->name = $_name;
		$this->filters[] = $_price;
		$_list->selfAddition($this); // добавляем текущий объект в список категорий
	}
	
	public function getName():string {
		return $this->name;
	}
	
	/** Вводим названия продуктов  */
	public function setListProducts(array $listProducts): void
	{
		$this->listProducts = $listProducts;
	}
	
	public function showProducts():void
	{
		echo "<pre>";
		print_r($this->listProducts);
		echo "<pre/>";
	}
	public function showFilters() {
		echo 'БЕБЕБЕ';
	}
}