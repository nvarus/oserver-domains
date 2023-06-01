<?php

class Input extends Control
{
	protected $name;
	protected $value;
	protected $type;
	
	/**
	 * @return mixed
	 */
	public function getName()
	{
		return $this->name;
	}
	
	/**
	 * @param mixed $name
	 */
	public function setName($name)
	{
		$this->name = $name;
	}
	
	/**
	 * @return mixed
	 */
	public function getValue()
	{
		return $this->value;
	}
	
	/**
	 * @param mixed $value
	 */
	public function setValue($value)
	{
		$this->value = $value;
	}
	
}