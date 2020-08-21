<?php 
interface students
{
	function inputdata($sn);

}
interface employee
{
	function inputedata($en);

}
class cetpa implements students,employee
{
	function inputdata($sn)
	{
		echo "<br>Student=".$sn;
	}

	function inputedata($en)
	{
		echo "<br>Employee=".$en;
	}
}
$obj=new cetpa();
$obj->inputdata("Rajat");
$obj->inputedata("Tushar");
?>