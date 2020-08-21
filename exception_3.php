<?php

	class customExp extends Exception
	{
		function input()
		{

		}
		function error()
		{
			$errorMsg = 'error on line'.$this->getline().'in'.$this->getfile().'<b>'.$this->getMessage().'</b> is not a valid email address';
			return $errorMsg;
		}	
	}

			$email="piyushkumar@gmail.com";	

	try
	{
		if (filter_var($email, FILTER_VALIDATE_EMAIL)==FALSE)
		{
			throw new customExp($email);
		}
		echo "welcome $email";
	}
	catch (customExp $e)
	{
		echo $e->error();
	}
?>

<form method="POST">
	<tr>
		<td>
			email
			<input type="text" name="email">
		</td>
	</tr>
	<tr>
		<td>
			<input type="submit" name="submit">
		</td>
	</tr>
</form>