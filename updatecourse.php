<?php
//mysqli_connect(server_name,user name,password,database name) 
$con=mysqli_connect('localhost','root','','register') or die(mysqli_error());

$mobile=$_REQUEST['mobile'];	//getting course id from url
$record=mysqli_query($con,"select *from reg where mobile='$mobile'");
$fetchrecord=mysqli_fetch_assoc($record);

//update code
if(isset($_POST['update']))
{
	$na=$_POST['name'];
	$enr=$_POST['email'];
	$crs=$_POST['mobile'];
	$Fe=$_POST['branch'];
	$cl=$_POST['club'];
	$query=mysqli_query($con,"update reg set name='$na', email='$enr', mobile='$mobile', branch='$branch', club='$cl'");
	if($query)
	{
		echo "<script>alert('Data Updated!');window.location.href='allcourse.php';</script>";
	}
	else
	{
		echo "<script>alert('Request can't be completed right now!');window.location.href='regisrtaion.php';</script>";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Course</title>
</head>
<body>
<form method="POST">
<table width="500" cellpadding="5" align="center">
	<tr>
		<td>Name</td>
		<td><input type="text" name="name" value="<?php echo $fetchrecord['name']?>" required=""></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name="email" value="<?php echo $fetchrecord['email']?>" required=""></td>
	</tr>
	<tr>
		<td>Mobile</td>
		<td><input type="text" name="mobile" value="<?php echo $fetchrecord['mobile']?>"required=""></td>
	</tr>
	<tr>
		<td>Branch</td>
		<td><input type="text" name="branch" value="<?php echo $fetchrecord['branch']?>" required=""></td>
	</tr>
	<tr>
		<td>Club</td>
		<td><input type="text" name="club" value="<?php echo $fetchrecord['club']?>" required=""></td>
	</tr>
	<tr>
		<td><input type="submit" name="update" value="Update"></td>
	</tr>
</table>
</form>
</body>
</html>