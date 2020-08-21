<?php
if(isset($_POST['check']))
{
	$c=$_POST['cl'];
	$g=$_POST['gm'];
	if($c>=6 && $c<=8 && $g=='badminton')
	{
		echo "you are eligible for $g team";
	}
	elseif ($c>=9 && $c<=12 && $g=='cricket')
	{
		echo "you are eligible for $g team";
	}
	else
	{
		echo "sorry you are not eligible";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>team</title>
</head>
<body>
<form method="post">
	<table align="center">
		<tr>
			<td>class</td>
			<td><input type="text" name="cl"
				required=""></td>
		</tr>
		<tr>
			<td>game</td>
			<td><input type="text" name="gm"></td>
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