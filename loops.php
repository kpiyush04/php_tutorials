<?php
	//for loop
	//for (initialization; condition; counter)
echo "<table border='1' cellpadding='5'>";
echo "<tr>";
for ($i=1; $i<=100; $i++)
{
	echo "<td>$i</td>";
	if ($i%10==0) 
	{
		echo"</tr><tr>";

	}
}
echo "</tr></table>";
echo "<br>";
	//while loop
	$a=1;
	while($a<=10)
	{
		echo $a."<br>";
		$a++;
	}
//nested while loop
echo "<br>";
	$a=1;
	while($a<=10)
	{
		$b=1;
		while ($b <= $a)
		 {
			echo "*";
			$b++;
		}
		echo "<br>";
		$a++;
	}
?>