<?php
//for loop
//for (initialization;condition;counter)
echo "<table border='1' cellpadding='5'>";
echo "<tr>";
for($i=1;$i<=100;$i++)
{
	echo "<td>$i</td>";
	if ($i%10==0)
	{
		echo "</tr><tr>";
	}
}
echo "</tr>";
echo "</table>";
?>



