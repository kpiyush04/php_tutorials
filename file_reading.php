<?php
	if (isset($_POST['read']))
	{
		$file=$_FILES['doc']['tmp_name'];
		$fobj=fopen($file, "r");
		$data=fread($fobj, filesize($file));
		echo "$data";
		fclose($fobj);
	}
?>
<form method="POST" enctype="multipart/form-data">
	<input type="file" name="doc" required="">
	<input type="submit" name="read" value="Read Document">

</form>