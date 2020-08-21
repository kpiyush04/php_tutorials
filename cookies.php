<?php
	$con=mysql_connect("localhost","root","","casadb");
	$ckname='data';
	if(!isset($_COOKIE[$ckname]))
	{
		$query=mysql_query($con, "select *from pages where id=1");
		$fetchdata=mysqli_fetch_assoc($query);
		$ckval=$fetchdata['discription'];
		setcookie($ckname, $ckval,time()+(6*2),"/");
		echo "<h3> Value from database: </h3>".$ckval;
	}
	else
	{
		echo "<h3> Value from Cookie: </h3>".$_COOKIE[ckname];
	}
?>