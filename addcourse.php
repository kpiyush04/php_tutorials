<?php
	$con=mysqli_connect('localhost','root','', 'register') or die(mysqli_error());
	is(isset($_POST['save']))
	{
		$na=$_POST['Name'];
		$enr=$_POST['email'];
		$crs=$_POST['mobile'];
		$Fe=$_POST['branch'];
		$cl=$_POST['club'];
		$query=mysqli_query($con,"insert into reg(Name, email, mobile, branch, club) values('$na','$enr','$crs','$Fe','$cl')");
		if($query)
		{
			echo "<script>alert('data inserted');window.location.href='allcourse.php';</script>";
		}
		else
		{
			echo "<script>alert('data not inserted');window.location.href='addcourse.php';</script>";
		}
	}
?>
