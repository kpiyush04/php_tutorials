<?php
	class school
	{
		public $name;
	 	public $addres;
	 	public $mobile;
		public $salary;
		function input($n, $a, $m, $s)
		{
			$this->name=$n;
			$this->addres=$a;
			$this->mobile=$m;
			$this->salary=$s;
		}
	}
	class reporting extends school
	{
		function output()
		{
			echo "name=".$this->name;
			echo "<br>addres=".$this->addres;
			echo "<br>mobile=".$this->mobile;
			echo "<br>salary=".$this->salary;
		}
	}
	$obj=new reporting();
	$obj->input("piu", "roorkee", 8764238932, 28000);
	$obj->output();
?>
