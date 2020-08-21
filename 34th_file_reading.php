<?php 
	if(isset($_POST['read']))
	{
		$file=$_FILES['doc']['tmp_name'];
		$fobj=fopen($file, "r");
		$data=fread($fobj, filesize($file));
		$data=explode("|",$data);
		echo "<table width='500'border='1'>";
		foreach ($data as $value)
		{
			$data2=explode("=", $value);
			echo "<tr>";
			echo "<td>".$data2[0]."</td>";
			echo "<td>".$data2[1]."</td>";
			echo "</tr>";
		}
		echo "</table>";
		fclose($fobj);
	}
?>
<form method="post" enctype="multipart/form-data">
	<input type="file" name="doc" required=""> 
	<input type="submit" name="read" value="Read Document">
</form>