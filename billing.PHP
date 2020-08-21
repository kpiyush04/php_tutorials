<?php
$name="priyanshi";
$mob=68767676;
$pro="mi note 7 pro";
$qty=20;
$price=16000;
?>
<!DOCTYPE html>
<html>
<head>
	<title>billing</title>
</head>
<body> 
	<table border="1" align="center">
		<tr>
			<th colspan="2">customer invoice</th>
		</tr>
		<tr>
			<td>name</td>
			<td><?php echo $name;?></td>
		</tr>
		<tr>
			<td>mobile no.</td>
			<td><?php echo $mob;?></td>
		</tr>
		<tr>
			<td>product</td>
			<td><?php echo $pro;?></td>
		</tr>
		<tr>
			<td>quantity</td>
			<td><?php echo $qty;?></td>
		</tr>
		<tr>
			<td>price</td>
			<td><?php echo $price;?></td>
		</tr>
		<tr>
			<td>grand total</td>
			<td><?php echo $qty*$price;?> </td>
		</tr>
	</table>

</body>
</html>