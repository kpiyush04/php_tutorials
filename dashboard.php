<?php
	session_start();
	if (isset($_SESSION['login_name']))
	{
		echo "<p>welcome:".$_SESSION['login_name']."</p>";
		echo "<p>".$_SESSION['login_email']."</p>";
		echo "<a href='logout.php'>Logout</a>";
	}
	else
	{
		header("location:index.php");
	}
?>