<?php
$exam=array("anmol"=>array(8,9,7),"bhanu"=>array(7,9,6),
"manu"=>array(5,9,9));
echo "<table border='1' cellpadding='5' cellspacing='0' width='800' align='center'>";
echo "<tr>";
echo "<th>name</th>";
echo "<th>maths</th>";
echo "<th>Hindi</th>";
echo "<th>English</th>";
echo "<th>Total</th>";
echo "</tr>";
foreach($exam as $studname=> $stdrecords)
{
	echo "<tr>";
	echo "<td>$studname</td>";
	$ttl=0;
	foreach ($stdrecords as $marks)
	{
		echo "<td>$marks</td>";
		$ttl+=$marks;

	}
	echo "<td>$ttl</td>";
	echo "<tr>";

}
echo "</table>";
?>