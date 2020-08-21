<?php
 	$f=$_POST['fno'];
	$s=$_POST['sno'];
	echo "hypotenuse".hypot($sno, $fno )($f+$s);
?>

<!DOCTYPE html>
<html>
<head>
	<title>form input</title>
</head>
<body>
		<form action="post.php" method="post">
			<table>
				<tr>
					<td>first no</td>
					<td><input type="number" name="sno"></td>					
				</tr>
				<tr>
					<td>second no</td>
					<td><input type="number" name="fno" required=""></td>
				</tr>
		
				<tr>
					<td>
						<input type="submit" name="result" value="submit">
					</td>
				</tr>
				<tr>
					<td>
						<input type="reset" name="reset" value="reset">
					</td>
				</tr>
			</table>	
		</form>
</body>
</html>