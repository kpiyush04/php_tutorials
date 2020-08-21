<?php
//print_r($_POST);
if(isset($_POST['login']))
{
$u=$_POST['uname'];
$p=$_POST['pass'];
if($u=="admin" && $p==123)
{
	echo "WELCOME";
}
else
{
	echo "invalid login details";
}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
<form method="post">
	<table align="center">
		<tr>
			<td>user name</td>
			<td><input type="text" name="uname"
				required=""></td>
		</tr>
		<tr>
			<td>password</td>
			<td><input type="password" name="pass"></td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="login" value="login">
			</td>
		</tr>
	</table>
</form>
</body>
</html>