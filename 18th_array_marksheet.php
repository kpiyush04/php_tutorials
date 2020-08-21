
</style>
<?php 
$students=array("Ankit","Bhanu","Chintu","Manu");
$regno=array(101,102,103,104);
$hindi=array(75,72,79,82);
$english=array(78,77,65,85);
//echo $students[1]; output->Bhanu
echo "<table border='0' cellpadding='5' cellspacing='0' width='800' align='center' class='rpt'>";
echo "<tr>";
echo "<th>Roll No</th>";
echo "<th>Name</th>";
echo "<th>Hindi</th>";
echo "<th>English</th>";
echo "<th>Total</th>";
echo "</tr>";
$avg=0;
for($i=0;$i<count($students);$i++)
{
	$cl='even';
	if($i%2==0)
	{
		$cl='odd';
	}
	$ttl=$hindi[$i]+$english[$i];
	echo "<tr class=$cl>";
	echo "<td>".$regno[$i]."</td>";
	echo "<td>".$students[$i]."</td>";
	echo "<td>".$hindi[$i]."</td>";
	echo "<td>".$english[$i]."</td>";
	echo "<td>".$ttl."</td>";
	echo "</tr>";
	$avg+=$ttl;
}
echo "<tr>";
echo "<td colspan='4'>Average Marks</td>";
echo "<td>".($avg/count($students))."</td>";
echo "</tr>";
echo "</table>";
?>