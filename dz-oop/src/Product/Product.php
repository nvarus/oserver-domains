<?php
	
	class Product
	{
		private string $name;
		private float $price;
		
		public function __construct($_name, $_price) {
			$this->name = $_name;
			$this->price = $_price;
		}
		
		public function getProduct():string {
			return "Name{$this->name};Price{$this->price}";
	}
	}