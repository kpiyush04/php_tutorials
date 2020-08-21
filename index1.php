<?php
	$con=mysqli_query("localhost","root","","batch20");
	if (isset($_POST['login']))
	{
		$user=mysqli_real_escape_string($con,$_POST['uname']);
		$pwd=md5(mysqli_real_escape_string($con,$_POST['pass']));
		$query=mysqli_query($con,"slect *from user where email='$user' and password='$pwd'");
		$row=mysqli_num_rows($query);
		if ($row>0)
		{
			$querydata=mysqli_fetch_assoc($query);
			session_start();
			$_SESSION['login_name']=$querydata['name'];
			$_SESSION['login_email']=$querydata['email'];
			header("location:dashbboard.php");
		}
		else
		{
			echo "<script>alert('invalid login credentials'); window.location.href='index.php';</script>";
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