<?php

class Text extends Input
{
	private $placeholder;
	
	public function __construct($_background, $_width, $_height, $_name, $_value, $_placeholder)
	{
		$this->setBackground($_background);
		$this->setWidth($_width);
		$this->setHeight($_height);
		$this->setName($_name);
		$this->setValue($_value);
		$this->setPlaceholder($_placeholder);
		$this->type = 'text';
	}
	
	/**
	 * @return mixed
	 */
	public function getPlaceholder()
	{
		return $this->placeholder;
	}
	
	/**
	 * @param mixed $placeholder
	 */
	public function setPlaceholder($placeholder)
	{
		$this->placeholder = $placeholder;
	}
	
	/**
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}
	public function convertToHTML() {
		
		return "<input type='text' name='$this->name' value='$this->value' placeholder='$this->placeholder'
			style='width:$this->width;height:$this->height;background:$this->background;'>";
	}
}