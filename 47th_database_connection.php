<?php
	//mysqli_connect(server_name, user_name, password, database_nmae)
	$con=mysqli_connect('localhost','root','','register') or die(mysqli_error());
	if(isset($_POST['Save']))
	{
		$na=$_POST['Name'];
		$enr=$_POST['Enrollment'];
		$crs=$_POST['Course'];
		$Fe=$_POST['Fee'];
		$query=mysqli_query($con,"insert into reg(Name, Enrollment, Course, Fee) values('$na','$enr','$crs','$Fe')");
		if($query)
		{
			echo "<script>alert('data inserted');window.location.href='47th_database_connection.php';</script>";
		}
		else
		{
			echo "<script>alert('data not inserted');window.location.href='47th_database_connection.php';</script>";
		}
	}
?>
<form method='POST'>
	<table>
		<tr>
			<td>
				Name
			</td>
			<td>
				<input type="text" name="Name" required="">
			</td>
		</tr>
			<tr>
				<td>
					Enrollment
				</td>
				<td>
					<input type="text" name="Enrollment" required="">
				</td>
			</tr>
			<tr>
				<td>
					Course
				</td>
				<td>
					<input type="text" name="Course" required="">
				</td>
			</tr> 
			<tr>
				<td>
					Fee
				</td>
				<td>
					<input type="text" name="Fee" required="">
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="Save" >
				</td>
			</tr>
	</table>
</form>