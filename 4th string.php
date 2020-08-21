<?php
$str1="hello";
$str2="students";
//html tag as string in php
$str3="<h1><u>welcome</u></h1>";
echo "<body bgcolor='yellow'>";
echo $str1;
//calling a php variable as a string with html tag
echo"<p>$str2</p>";
echo $str3;
//concatenation 
$str4=$str1.$str2;
echo $str4;
echo "</body>";
?>
