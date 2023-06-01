<?php

class Control
{
	protected string $background;
	protected string $width;
	protected string $height;
	
	function getBackground():string
	{
		return $this->background;
	}
	function setBackground($background):void
	{
		$this->background = $background;
	}
	
	function getWidth():string
	{
		return $this->width;
	}
	function setWidth($width):void
	{
		$this->width = $width;
	}

	function getHeight():string
	{
		return $this->height;
	}
	function setHeight($height):void
	{
		$this->height = $height;
	}
}