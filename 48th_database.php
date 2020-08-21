<?php
	$conn=new mysqli;
	if ($conn->connect_error)
	{
		die ("connection failed", $conn->connect_error);
	}
	$conn->query ("insert into registr values ('abc','xyz', '12345678')");
	$conn->query ("delete from register where id='2'");
?>