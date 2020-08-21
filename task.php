<?php
$f=$_POST['fno'];
$s=$_POST['sno'];
echo hypot($s,$f)
?>
<html>
<head>
	<title>form input</title>
</head>
<body>
<form method="POST">
	<table>
		<tr>
			<td>first number</td>
			<td><input type="text" name="fno"
				required=""></td>
		</tr>
		<tr>
			<td>second no</td>
			<td><input type="text" name="sno"></td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="result" value="add">
			</td>
		</tr>
	</table>
</form>
</body>
</html>