<?php

class Label extends Control
{
	private object $for;
	private string $name;
	
	public function __construct($_name, $_background, $_width, $_height, $_forObject)
	{
		$this->setBackground($_background);
		$this->setWidth($_width);
		$this->setHeight($_height);
		$this->setParentName($_forObject);
		$this->name = $_name;
	}
	
	/**
	 * @return mixed
	 */
	public function getParentName()
	{
		return $this->for;
	}
	
	/**
	 * @param object $object - объект класса Button или Text
	 */
	public function setParentName($object)
	{
		$this->for = $object;
	}
	public function convertToHTML() {
		$parent = $this->for;
		$elemName = $parent->getName();
		
		
		return "<lebel for='$elemName'
		style='width:$this->width;height:$this->height;background:$this->background;'>$this->name</lebel>";
	}
}