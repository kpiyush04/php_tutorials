<?php
	$con=mysqli_connect('localhost','root','','employee') or die(mysqli_error());
	$id=$_REQUEST['cid'];
	$record=mysqli_query($con,"select *from details where id='$id'");
	$fetchrecord=mysqli_fetch_assoc($record);
	if (isset($_POST['update']))
	{
		$id=$_POST['Id'];
		$e=$_POST['Empcode'];
		$n=$_POST['Name'];
		$d=$_POST['Dept'];
		$dg=$_POST['Designation'];
	    $query=mysqli_query($con,"update details set Name='$n',Empcode='$e',Dept='$d',Designation='$dg' where Id='$id'");
		if ($query) 
		{
			echo "<script>alert('Data Updated!'); window.location.href='53rd_ex_database.php';</script>";
		}
		else
		{
			echo "<script>alert('Data NOT Updated!'); window.location.href='54th_ex_database.php';</script>";
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
			<td><input type="text" name="Id" value="<?php echo $fetchrecord['Id'];?>" required=""></input></td>
		</tr>
		<tr>
			<td>Name:</td>
			<td><input type="text" name="Name" value="<?php echo $fetchrecord['Name'];?>" required=""></input></td>
		</tr>
		
		<tr>
			<td>Employee Code:</td>
			<td><input type="text" name="Empcode" value="<?php echo $fetchrecord['Empcode'];?>" required=""></input></td>
		</tr>
		<tr>
			<td>Department:</td>
			<td><input type="text" name="Dept" value="<?php echo $fetchrecord['Dept'];?>" required=""></input></td>
		</tr>
		<tr>
			<td>Designation:</td>
			<td><input type="text" name="Designation" value="<?php echo $fetchrecord['Designation'];?>"></input></td>
		</tr>
		<tr>
			<td><input type="submit" name="update"  value="Update" required=""></input></td>
		</tr>
	</table>
</form>