<?php
if(isset($_POST['submit']))
{
	$f=$_POST['fno'];
	$s=$_POST['sno'];
	$c=$_POST['choice'];
	switch($c)	
	{
	case 1:
		add($f,$s);
		break;
	case 2:
		subtract($f,$s);
		break;
	
	case 3:
		multiply($f,$s);
		break;
	
	case 4:
		divide($f,$s);
		break;

	default:
		echo "bye";
    	break;
	}
}
function add($n1,$n2)
{
	echo $n1+$n2;
}
function subtract($n1,$n2)
{
	echo $n1-$n2;
	}
function multiply($n1,$n2)
{
	echo $n1*$n2;
}
function divide($n1,$n2)
{
	echo $n1/$n2;

	}
	?>
<form method="POST">
<table align="center">
	<tr>
		<td>first no.</td>
		<td><input type="text" name="fno"></td>

	</tr>
	<tr>
		<td>second no.</td>
		<td><input type="text" name="sno"></td>
	</tr>
	<tr>
		<td>operation</td>
		<td><select name="choice">
			<option value="1">+</option>
			<option value="2">-</option>
			<option value="3">*</option>
			<option value="4">/</option>
		</select></td>
	</tr>
	<tr>
		<td><input type="submit" name="submit" value="result"></td>
	</tr>
</table>
</form>