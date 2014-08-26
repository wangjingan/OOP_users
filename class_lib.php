<?php 
	/**
	* 
	*/
	class Person  
	{
		var $name;
		public $height;
		private $pinn_number;
		private $bonus;
		protected $social_insurances;

		function __construct($person_name)
		{
			$this->name = $person_name;
		}
		function set_name($new_name)
		{
			$this->name = $new_name;
		}
		function get_name()
		{
			return $this->name;
		}
		private function get_pinn_number()
		{
			return $this->pinn_number;
		}
	}
?>