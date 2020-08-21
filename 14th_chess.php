<?php
echo "<table border='1'cellpadding='30'>";
for ($i=0;$i<9;$i++)
{
	echo  "<tr>";
	for($j=0;$j<9;$j++)
	{
		$bg='';
		if(($i+$j)%2==0)
		{
			$bg='black';
		}
		echo "<td bgcolor=$bg></td>";
	}
	echo "</tr>";
}
echo "</table>";
?>





