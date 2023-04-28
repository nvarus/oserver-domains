<?php

class Category
{
	public $name;
	public $list_products;
	
	public function __construct($name)
	{
		$this->name = $name;
	}
	
	function getCategoryName()
	{
		return $this->name;
	}
	
	function getCategoryProducts()
	{
		return $this->list_products;
	}
	function addProducts($nameProducts, $priceProducts):void {
		$this->list_products[] = ["prod_name" => $nameProducts, "prod_price" => $priceProducts];
	}
}


