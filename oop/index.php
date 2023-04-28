<?php
	
	class Name {
		private $name;
		
		function __construct($x = 'alexey')
		{
			$this->name = $x;
		}
		
		function hello()
		{
			echo "Привет" . $this->name . '!';
		}
	}
	
	$obj0 = new Name();
	$obj1 = new Name('ASSS');
	$obj2 = new Name('BBBB');
	
	$obj0->hello();
	$obj1->hello();
	$obj2->hello();