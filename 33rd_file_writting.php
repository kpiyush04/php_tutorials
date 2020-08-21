<?php
if(isset($_POST['register']))
{
$n=ucwords($_POST['sname']);
$a=ucwords($_POST['adrs']);
$m=$_POST['mobl'];
$c=ucwords($_POST['cors']);
$fname="data/".str_replace(" ","_",$n).".txt";
$fobj=fopen($fname,"w");
//$data="name=".$n."\naddress=".$a."\nmobile=".$m."\ncourse=".$c."\n";
//input formatting
$data="name=".$n."|\naddress=".$a."|\nmobile=".$m."|\ncourse=".$c."\n";

fwrite($fobj,$data);
fclose($fobj);
}
?>





<table align="center">
	<form method="post">
		<tr>
			<td>name</td>
			<td><input type="text" name="sname"></td>
		</tr>
		<tr>
			<td>address</td>
			<td><input type="text" name="adrs"></td>
		</tr>
		<tr>
			<td>mobile</td>
			<td><input type="text" name="mobl"></td>
		</tr>
		<tr>
			<td>course</td>
			<td><input type="text" name="cors"></td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" name="register" value="save">
			</td>
		</tr>
	</form>
</table>