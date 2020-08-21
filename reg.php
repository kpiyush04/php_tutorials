<?php 
 $con=mysqli_connect('localhost', 'root', '', 'reg') or die(mysql_error());
 if (isset($_POST['submit']))
 {
 	$n=$_POST['name'];
 	$e=$_POST['Enrollment'];
 	$m=$_POST['mob'];
 	$f=$_POST['Fee'];
 	$query=mysql_query($con, "insert into reg values ($n, $e, $m ,$f)");
 	if ($query)
 	{
 		echo "data inserted";
 	}
 	else
 	{
 		echo "data not inserted";
 	}
 }

?>
<form >
	<table>
		<tr>
			<td>
				name
			</td>
			<td>
				<input type="text" name="name">
			</td>
		</tr>
		<tr>
			<td>
				Enrollment.
			</td>
			<td>
				<input type="text" name="Enrollment.">
			</td>
		</tr>
		<tr>
			<td>
				mob
			</td>
			<td>
				<input type="text" name="mob">
			</td>
		</tr>
		<tr>
			<td>
				Fee
			</td>
			<td>
				<input type="text" name="Fee">
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="submit">
			</td>
		</tr>
	</table>
</form>