<?php
$months=array("jan","feb","mar","apr","may","jun","jul","aug","sep","oct","nov","dec");
?>
<table align="center">
	<tr>
		<td>name</td>
		<td><input type="text" name="name"></td>
	</tr>
	<tr>
		<td>email</td>
		<td><input type="email" name="email"></td>
	</tr>
	<tr>
		<td>joining month</td>
		<td>
			<select name="month">
				<?php
				foreach($months as $mnth)
				{?>
					<option><?php echo $mnth;?></option><?php
				}?>
			</select>
			
</table>
