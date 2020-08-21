<?php
 class calculate
 {
 	function __call($function_name, $args)
 	{
 		
 		if(count ($args)==1)
 		{
 			echo "<br>Area of square: ". $args[0]*$args[0];
 		}
 		elseif (count($args)==2)
 		{
 			echo "<br> Area of rectangle:".$args[0]*$args[1];
 		}
 		else
 		{
 			echo "<br> no formula exist";
 		}
 	}
 }
 $obj=new calculate();
 $obj->area(10);
 $obj->area(10,15);
 $obj->area(10,12,14);
?>