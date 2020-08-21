<?php
	$con=mysqli_connect('localhost','root','','employee') or die(mysqli_error());
	if (isset($_POST['save'])) 
	{
		$id=$_POST['Id'];
		$e=$_POST['Empcode'];
		$n=$_POST['Name'];
		$d=$_POST['Dept'];
		$dg=$_POST['Designation'];
	    $query=mysqli_query($con,"insert into details(Name,Empcode,Dept,Designation,Id) values('$n','$e','$d','$dg','$id')");
		if ($query) 
		{
			echo "<script>alert('Data Inserted!'); window.location.href='53rd_ex_database.php';</script>";
		}
		else
		{
			echo "<script>alert('data NOT inserted!'); window.location.href='52nd_ex_database.php';</script>";
		}
	}
?>
<form method="post">
	<table align="center" border="2" cellpadding="2" cellspacing="4" >
		<tr>
			<td colspan="2"><h1><b>EMPLOYEE DETAILS</b></h1>
		</tr>
		<tr>
			<td>ID:</td>
			<td><input type="text" name="Id" required=""></input></td>
		</tr>
		<tr>
			<td>Name:</td>
			<td><input type="text" name="Name" required=""></input></td>
		</tr>
		
		<tr>
			<td>Employee Code:</td>
			<td><input type="text" name="Empcode" required=""></input></td>
		</tr>
		<tr>
			<td>Department:</td>
			<td><input type="text" name="Dept" required=""></input></td>
		</tr>
		<tr>
			<td>Designation:</td>
			<td><input type="text" name="Designation"></input></td>
		</tr>
		<tr>
			<td><input type="submit" name="save"  value="Save" required=""></input></td>
		</tr>
	</table>
</form>