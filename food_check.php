<?php
	$foods=array("south indian","north indian","chinese","continental","italian");
	if(isset($_POST['submit']))
	{
		$gettype=$_POST['types'];
		print_r($gettype);
	}
?>
<form method="post">
	<table cellspacing="2" cellpadding="4" border="2" align="center">
		<tr>
			<td><h1><b> FOOD MENU</b></h1></td>
		</tr>
		<tr>
				<?php
					for ($i=0; $i < count($foods); $i++) 
					{?>
						<td><input type="checkbox" name="types[]" value="<?php echo $foods[$i]; ?>"><?php echo $foods[$i]; ?></input></td>

					<?php } ?>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Submit"></input></td>
		</tr>
	</table>
</form>