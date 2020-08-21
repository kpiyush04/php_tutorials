<?php
/*----------------------------------File Handling----------------------------------
file handing is used to store application data for future use.
functions in file handling:-

1> fopen(filename, mode)
2> fwrite(fileobject, string)
3> fread(fileobject, length)
4> filesize(filename)
5> fclode(fileobj)
6> unlink(filename)

File Handling Mode
w write mode
r read mode
a append mode
w+ write and read
r+ read and write
a+ append and read
*/
if(isset($_POST['register']))
{
	$n=ucwords($_POST['sname']);
	$a=ucwords($_POST['adrs']);
	$m=$_POST['mobl'];
	$c=ucwords($_POST['cors']);
	$fname="data/".str_replace(" ", "_", $n).".txt";
	$fobj=fopen($fname, "w");
	$data="name=".$n."\naddress=".$a."\nmobile".$m."\ncourse".$c."\n";
	fwrite($fobj, $data);
	fclose($fobj);
}


?>




<table align="center">
	<form method="POST">
		<tr>
			<td>
				name
			</td>
			<td>
				<input type="text" name="sname">
			</td>
		</tr>
		<tr>
			<td>
				address
			</td>
			<td>
				<input type="text" name="adrs">
			</td>
		</tr>
		<tr>
			<td>
				mobile
			</td>
			<td>
				<input type="text" pattern="[0-9]{10}" name="mobl">
			</td>
		</tr>
		<tr>
			<td>
				course
			</td>
			<td>
				<input type="text" name="cors">
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" name="register" value="save">
			</td>
		</tr>
	</form>
</table>
