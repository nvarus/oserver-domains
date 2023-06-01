<?php

class Select extends Control
{
	private array $items;
	private string $name;
	private string $value;
	
	public function __construct($_background, $_width, $_height, $_name, $_value, $_items)
	{
		$this->setBackground($_background);
		$this->setWidth($_width);
		$this->setHeight($_height);
		$this->name = $_name;
		$this->value = $_value;
		$this->setItems($_items);
	}
	
	/**
	 * @return array
	 */
	public function getItems(): array
	{
		return $this->items;
	}
	
	/**
	 * @param array $items
	 */
	public function setItems(array $items): void
	{
		$this->items = $items;
	}
	
}