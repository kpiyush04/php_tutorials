<?php
//trait is similar to abstract class ehich can not be instentiate but number can be access using class object 
	trait employee
	{
		function input($n,$s,$l)
		{
			$this->nam=$n;
			$this->sal=$s;
			$this->lv=$l;
		}
	}

	class gettrait
	{
		use employee;
		function output()
		{
			echo "name=".$this->nam;
			echo "<br>sal=".$this->sal;
			echo "<br>lv=".$this->lv;
		}
	}
	$obj=new gettrait();
	$obj->input("piu", 356, 3463);
	$obj->output();
?>