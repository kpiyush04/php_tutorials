<?php
	$con=mysqli_connect('localhost','root','','employee') or die(mysqli_error());
	if (isset($_GET['did'])) 
	{	
		$id=$_GET['did'];
		$del_record=mysqli_query($con,"Delete from details where Id='$id'");
		if ($del_record) 
		{
			echo "<script>alert('Record has been deleted!');window.location.href='53rd_ex_database.php';</script>";
		}
	}
	$query=mysqli_query($con,"select *from details");
?>

	<table align="center" border="2" cellpadding="2" cellspacing="4" >
		<tr>
			<td colspan="7" align="center"><h1><b>EMPLOYEE DETAILS</b></h1>
		</tr>
		<tr>
			<td>Sr:</td>
			<td>ID:</td>
			<td>Employee Code:</td>
			<td>Department:</td>
			<td>Name:</td>
			<td>Designation:</td>
			<td>Action:</td>
		</tr>
		<?php
			$sr=1;
			while($fetchdata=mysqli_fetch_assoc($query))
			{
		?>
		<tr>
			<td><?php echo $sr;?></td>
			<td><?php echo $fetchdata['Id'];?></td>
			<td><?php echo $fetchdata['Empcode'];?></td>
			<td><?php echo $fetchdata['Dept'];?></td>
			<td><?php echo $fetchdata['Name'];?></td>
			<td><?php echo $fetchdata['Designation'];?></td>
			<td><a href="54th_ex_database.php?cid=<?php echo $fetchdata['Id'];?>">Update</a><br><a href="53rd_ex_database.php?did=<?php echo  $fetchdata['Id']; ?>">Delete</a></td>
		</tr>
		<?php 
				$sr++; 
			}
		?>
		<tr>
			<td colspan="7" align="center"><a href="52nd_ex_database.php"><h2><b>+ Record</b></h2></a></td>
		</tr>
	</table>