<?php
$brands=array("hero","tvs","bajaj");
$models=array(array("splendon","hf deluxe","passion"),array("apache160","apache180","sport"),array("pulsar","discover","platina"));
echo "<table border='1' cellpadding='5'>";
echo "<tr>";
echo "<td>brands</td>";
echo "<td>bike1</td>";
echo "<td>bike2</td>";
echo "<td>bike3</td>";
echo "</tr>";
for($i=0;$i<count($brands);$i++)
{
	echo "<tr>";
	echo "<td>".$brands[$i]."</td>";
	for ($j=0;$j<count($models[$i]);$j++)
	{
		echo "<td>".$models[$i][$j]."</td>";

	}
	echo "</tr>";
}
?>