<?php
$fobj=fopen("report.xls","w");
$header="roll no\tname\thindi\tenglish\n";
$students=array("Ankit","Bhanu","Chintu","Manu");
$regno=array(101,102,103,104);
$hindi=array(75,72,79,82);
$english=array(78,77,65,85);
fwrite($fobj,$header);
for($i=0;$i<count($students);$i++)
{
	$stdrecord=$regno[$i]."\t".$students[$i]."\".$hindi[$i]."\t".$english[$i]."\n";
	fwrite($fobj, $stdrecord);
}
fclose($fobj);
?>