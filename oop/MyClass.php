<?php
	
	class MyClass
	{
		public $firm_name = 'FOG';
		private $INN;
		protected $log;
		function firm_name() {
			echo 'Привет'. $this -> firm_name . '!';
		}
		
		function firm_rename($a) {
			$this -> firm_name = $a;
			echo "Теперь компания называется" . $this -> firm_name;
		}
	}
	
	$obj = new MyClass();
	$obj -> firm_name();
	$obj -> $firm_name = "DDD";
	$obj -> firm_name();
	$obj -> firm_name('asfasfasf');
	$obj -> firm_name();