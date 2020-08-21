<?php
	$e=$_POST['email'];
	try
	{ 
		if (strpos($e, ".")-strpos($e, "@")==1)
		{
			throw new exception('invaild email');
		}
	}
	catch (Exception $e)
	{
		echo $ex->getMessage();
	}
?>


<form method="post">
	<table>
		<tr>
			<td>
				email
			</td>
			<td>
				<input type="text" name="email"></td>	
		</tr>		
		<tr>
			<td>
				<input type="submit" name="result" value="submit">
			</td>
		</tr>
	</table>	
</form>

