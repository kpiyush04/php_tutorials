
<?php
echo "<table border='1'cellpadding='2'>";
for ($i=1;$i<=10;$i++)
{
	echo  "<tr>";
	for($j=1;$j<=20;$j++)
	{
	
		echo "<td bgcolor>".($i*$j)."</td>";
	}
	echo "</tr>";
}
echo "</table>";
?>





