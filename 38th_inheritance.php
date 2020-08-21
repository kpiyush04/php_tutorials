<?php 
	class school
	{
		public $name;
		public $adres;
		public $mobile;
		public $salary;
		function input($n, $a, $m,$s)
		{
			$this->name=$n;
			$this->adres=$a;
			$this->mobile=$m;
			$this->salary=$s;
		}
	}
	class reporting extends school
	{
		function output()
		{
			echo "Name=".$this->name;
			echo "<br>Mobile=".$this->mobile;
			echo "<br>Address=".$this->adres;
			echo "<br>Salary=".$this->salary;
		}
	}
	$obj=new reporting();
	$obj->input("Hardik","SRE",9536856321,25000);
	$obj->output();

?>