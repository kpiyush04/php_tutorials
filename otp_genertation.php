<?php
$charset='abcdefghijklmnopqrstuvwxyz0123456789';
$otp=' ';
for ($x=0;$x<6;$x++)
{
	$n=rand(0,35);
	$otp.=$charset[$n];
} 
echo $otp;
?>