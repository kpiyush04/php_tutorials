<?php 
if(isset($_POST['register']))
{
	$n=ucwords($_POST['sname']);
	$a=ucwords($_POST['adrs']);
	$m=$_POST['mobl'];
	$c=ucwords($_POST['cors']);
	$fname="data/".str_replace(" ", "_",$n).".txt";
	$fobj=fopen($fname, "w");
	//$data="Name=".$n."\nAddress=".$a."\nMobile=".$m."\nCourse=".$c."\n";
	//input formating
	$data="Name=".$n."|\nAddress=".$a."|\nMobile=".$m."|\nCourse=".$c."\n";
	fwrite($fobj, $data);
	fclose($fobj);
}
	

?>
<table align="center">
	<form method="post">
		<tr>
			<td>Name</td>
			<td><input type="text" name="sname"></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><input type="text" name="adrs"></td>
		</tr>
		<tr>
			<td>Mobile</td>
			<td><input type="text" pattern="[0-9]{10}" name="mobl"></td>
		</tr>
		<tr>
			<td>Course</td>
			<td><input type="text" name="cors"></td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" name="register" value="Save">
			</td>
		</tr>
	</form>
</table>