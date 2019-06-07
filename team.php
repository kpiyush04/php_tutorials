<?php
	if(isset($_POST['check']))
		{
			$c=$_POST['cl'];
			$g=$_POST['gm'];
			if ($c>=6 && $c<=8 && $g=="badminton")
				{
					echo "you are not eeligible for $g team";
				}
			elseif ($c>=9 && $c<=12 && $g=="cricket")
				{
					echo "you are not eeligible for $g team";
				}
			else
				{
					echo "you are not eeligible for $g team";
				}					
		}
?>


<!DOCTYPE html>
<html>
<head>
	<title>team input</title>
</head>
<body>
		<form method="post">
			<table align="center">
				<tr>
					<td>class</td>
					<td><input type="text" name="cl" required=""></td>					
				</tr>
				<tr>
					<td>game</td>
					<td><input type="text" name="gm" required=""></td>
				</tr>
		
				<tr>
					<td>
						<input type="submit" name="check" value="register">
					</td>
				</tr>
			</table>	
		</form>
</body>
</html>