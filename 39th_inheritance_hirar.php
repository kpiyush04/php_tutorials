<?php 
	class company
	{
		public $name;
		public $adres;
		public $mobile;
		public $salary;
		public $id;
		function input($i,$n, $a, $m,$s)
		{
			$this->name=$n;
			$this->adres=$a;
			$this->mobile=$m;
			$this->salary=$s;
			$this->id=$i;
		}
	}
	class enquiry extends company
	{
		function checkemp($i)
		{
			if ($i==$this->id)
			{
				echo "<br>Name=".$this->name;
				echo "<br>Mobile=".$this->mobile;
				echo "<br>Address=".$this->adres;	
			}
			else
			{
				echo "<br>No Record found";
			}

		}
	}
	class account extends company
	{
		function checksal($i)
		{
			if ($i==$this->id)
			{
				echo "<br>Name=".$this->name;
				echo "<br>Salary=".$this->salary;	
			}
			else
			{
				echo "<br>No Record found";
			}

		}	
	}
	$obj=new enquiry();
	$obj->input(101,"ha","rke",9536856321,25000);
	$obj->checkemp(101);
	$obj2=new account();
	$obj2->input(105,"P","SRE",9536856321,25000);
	$obj2->checksal(105);
?>