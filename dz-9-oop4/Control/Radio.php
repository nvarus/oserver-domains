<?php

class Radio extends Input
{
	private $isChecked;
	
	public function __construct($_background, $_width, $_height, $_name, $_value, $_isChecked)
	{
		$this->setBackground($_background);
		$this->setWidth($_width);
		$this->setHeight($_height);
		$this->setName($_name);
		$this->setValue($_value);
		$this->setCheckedState($_isChecked);
		
	}
	
	/**
	 * @return mixed
	 */
	public function getCheckedState()
	{
		return $this->isChecked;
	}
	
	/**
	 * @param mixed $isChecked
	 */
	public function setCheckedState($isChecked)
	{
		$this->isChecked = $isChecked;
	}
	public function convertToHTML():string
	{
		$checked = '';
		if ($this->isChecked) $checked = "checked";
		
		return "<input type='radio' name='$this->name' value='$this->value'
	style='background: $this->background; width: $this->width; height: $this->height;' $checked>";
	}
}