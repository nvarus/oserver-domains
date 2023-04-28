<?php

class PhoneCategory extends Category


{
	public function __construct($_name,object $_list, $_filters = ["Ram", "CountSim", "Hdd", "OS"])
	{
		parent::__construct($_name, $_list);
		array_push($this->filters, ...$_filters);
	}
}