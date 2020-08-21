<?php
//nested while loop
$a=1;
while($a<=10)
{
	$b=1;
	while($b<=$a)
	{
		echo "*";
		$b++;
	}
	echo "<br>";
	$a++;
}

?>