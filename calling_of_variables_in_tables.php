<?php
	$name="piyush";
	$mobile=9899699739;
	$product="lenovo";
	$price=43000;
	$qty=4;
	$total=$qty*$price;
?>	
	<!DOCTYPE html>
<html>
<head>
	<title>bill</title>
</head>
<body>
	<table cellspacing="2" cellpadding="5" border="2">
		<tr align="center">
			<th colspan="2">Customer Invoice</th>
		</tr>
		<tr align="center">
			<td>name</td>
			<td><?php echo $name;?></td>
		</tr>
		</tr>
		<tr align="center">
			<td>mobile</td>
			<td><?php echo $mobile;?></td>
		</tr>
		</tr>
		<tr align="center">
			<td>product</td>
			<td><?php echo $product;?></td>
		</tr>
		</tr>
		<tr align="center">
			<td>price</td>
			<td><?php echo $price;?></td>
		</tr>
		<tr align="center">
			<td>quantity</td>
			<td><?php echo $qty;?></td>
		</tr>
		<tr align="center">
			<td>total</td>
			<td><?php echo ($total);?></td>
		</tr>
	</table>
</body>
</html>