<?php
	//print_r($_POST); //$_POST variable is used to collect values from HTML forms using method post
	if(isset($_POST['login'])) //isset for cheching value for variable and array
		{
			$u=$_POST['uname'];
			$p=$_POST['password'];
			if ($u=="pk" && $p=="123")
				{
					echo "welcome";
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
	<title>form input</title>
</head>
<body>
		<form method="post"> 
			<table align="center">
				<tr>
					<td>Username</td>
					<td><input type="text" name="uname"></td>					
				</tr>
				<tr>
					<td>password</td>
					<td><input type="password" name="password" required=""></td>
				</tr>
		
				<tr>
					<td>
						<input type="submit" name="login" value="Login">
					</td>
				</tr>
			</table>	
		</form>
</body>
</html>