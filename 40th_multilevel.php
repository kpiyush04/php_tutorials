<?php 
class enquiry
{
	function enq($n,$m)
	{
		$this->name=$n;
		$this->mob=$m;
	}
}
class admission extends enquiry
{
	function reg($c,$d)
	{
		$this->course=$c;
		$this->duration=$d;
	}
}
class school extends admission
{
	function output()
	{
		echo "Name=".$this->name;
		echo "<br>Mobile=".$this->mob;
		echo "<br>Course=".$this->course;
		echo "<br>Duration=".$this->duration;
	}
}

$obj=new school();
$obj->enq("Hardik",9536500245);
$obj->reg("PHP",6);
$obj->output();

?>