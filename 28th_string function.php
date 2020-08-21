<?php
//........................string function().....................................
$str1="php is a server side scripting language";
$str2="roorkee";
$str3="apple";
//strlen()-returns length of string

$x=strlen($str1);
echo $x;
//strrev()-arrange characters of a string in reverse order
echo strrev($str2);
//strpos(string,search)-returns index of a character from a string
echo strpos($str1,"i");
//str_replace(search,replace,subject)-it replace a character/word with other character/word in a string
echo str_replace("s", "S", $str1);
//lcfirst(str)-convert first character of string to lowercase
echo lcfirst($str1);
//ucfirst(str)-convert first character of string to uppercase
echo ucfirst($str1);
//ucwords(str)-convert first character of each word to upper case
echo ucwords($str1);
//strcmp(str1;str2)-compare two strings and returns -1,0,1
echo strcmp("A","A");
//trim(str)-remove white space from left side of string
echo "hello".trim("students");
//rtrim(str)-remove white space from right side of string
//explode(delimiter,string)-convert string to array
$expld=explode(" ",$str1);
echo"<pre>";
print_r($expld);
?>