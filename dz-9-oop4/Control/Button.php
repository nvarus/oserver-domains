<?php

class Button extends Input
{
	private $isSubmit;
	
	public function __construct($_background, $_width, $_height, $_name, $_value, $_isSubmit)
	{
		$this->setBackground($_background);
		$this->setWidth($_width);
		$this->setHeight($_height);
		$this->setName($_name);
		$this->setValue($_value);
		$this->setSubmitState($_isSubmit);
		$this->type = 'button';
	}
	
	/**
	 * @return mixed
	 */
	public function getIsSubmit()
	{
		return $this->isSubmit;
	}
	
	
	/**
	 * @param mixed
	 */
	public function setSubmitState($_isSubmit)
	{
		$this->isSubmit = $_isSubmit;
	}
	
	/**
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}
	public function convertToHTML() {
		$type = ($this->isSubmit) ? "submit" : "button";
		
		return "<input type='$type' name='$this->name' value='$this->value'
			style='width:$this->width;height:$this->height;background:$this->background;'>";
}
}