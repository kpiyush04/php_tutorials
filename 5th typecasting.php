<?php
//typecasting is used to change tha datatype into another datatype
$a=10;
$b="25";
var_dump($a);
echo "<p> before typecasting </p>";
var_dump($b);
$b=(int)$b; //typecasting
echo "<p> after typecasting </p>";
var_dump($b);
?>