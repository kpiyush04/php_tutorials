<?php
	class emp
	{
		function __construct($n)
		{
			echo "i am a constructor $n";
		}
		function __destruct()
		{
			echo "i am a destructor";
		}
	}
	$obj=new emp(10);
?>