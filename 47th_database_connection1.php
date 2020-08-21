<?php
	$con=mysqli_connect('localhost','root','','piyush') or die(my_sql_error());
	if (isset($_POST['SAVE']))
	{
		$n=$_POST['name'];
		$b=$_POST['batch'];
		$e=$_POST['enrollment'];
		$m=$_POST['mobile'];
		$query=mysql_query($con,"insert into form(name, batch, enrollment, mobile) values ($n, $b, $e, $m)");
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
<form>
	<table>
		<tr>
			<td>
				name
			</td>
			<td>
				<input type="text" name="name" required="">
			</td>
			<tr>
				<td>
					batch
				</td>
				<td>
					<input type="text" name="batch" required="">
				</td>
			</tr>
			<tr>
				<td>
					enrollment
				</td>
				<td>
					<input type="text" name="enrollment" required="">
				</td>
			</tr>
			<tr>
				<td>
					mobile
				</td>
				<td>
					<input type="text" name="mobile" required="">
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="SAVE" >
				</td>
			</tr>
		</tr>
	</table>
</form>