<?php
	//exception: exceptions are runtime errors, ehich can be categorised into two parts
	//system level exceptions: No recoverable errors
	//application level exceptions:recoverable errors
	//exceprions handlers:
		//try, catch, throw, final

	$n=10;
	$d=0;
	try
	{
		if($d==0)
		{
			throw new exception('denominator cannot be zero');
		}
		echo $n/$d;
	}
	catch (Exception $ex)
	{
		echo $ex->getMessage();
	}
?>