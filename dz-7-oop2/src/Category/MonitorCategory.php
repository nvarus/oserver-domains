<?php

class MonitorCategory extends Category
{
	public function __construct($_name, $_list, $_filters = ["Diagonal ", "Frequency"])
	{
		parent::__construct($_name, $_list);
		array_push($this->filters, ...$_filters);
	}
}