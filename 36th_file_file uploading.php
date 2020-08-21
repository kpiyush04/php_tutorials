 <?php
 if(isset($_POST['upload']))
 {
 	$file=$_FILES['pic']['name'];
 	$size=$_FILES['pic']['size'];
 	$ext=strtolower(pathinfo($file,PATHINFO_EXTENSION));
 	$dir='upload/';
 	if (($size>10240 && $size<1024000)||($ext=='png')|| $ext=='jpg'||$ext=='jpeg'||$ext=='gif')
 {
 	$destination=$dir.time().".$ext";
 	if (move_uploaded_file($_FILES['pic']['tmp_name'], $destination)) 
 	{
 		echo "file uploaded";
 	}
 	else
 	{
 		echo "error";
 	}
 }
}
?>
<form method="post" enctype="multipart/form-data">
	<input type="file" name="pic" required=""> 
	<input type="submit" name="upload" value="upload image">
</form>