<?php
if (isset($_POST['check']))
{
	$d=$_POST['day'];
	switch ($d)
	{
	    case 1:
	 	echo"monday";
	 	break;
	 	case 2:
	 	echo"tuesday";
	 	break;
	 	case 3:
	 	echo "wednesday";
	 	break;
	 	case 4:
	 	echo "thrusday";
	 	break;
	 	case 5:
	 	echo "friday";
	 	break;	 
	 	case 6:
	 	echo "saturday";
	 	break;
	 	case 7:
	 	echo "sunday";	
	 	default:
	 	echo "bye bye";
	 	break;
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>switch case</title>
</head>
<body>
	<form method="post">
	select day:
	<select name="day">
		<?php for ($i=1; $i<=7 ; $i++)
		{ ?>
			<option>
				<?php echo $i; ?>
			</option>
		<?php }?>
	</select>
	<input type="submit" name="check" value="show day">
 	
 	</form>
</body>
</html>	