<?php 
//-----------------------String Function()--------------------
$str1="Php is a server side scripting language";
$str2="roorkee";
$str3="Apple";
//strlen()- Returns length of string
/*$x=strlen($str1);
echo $x;
//strrev()- arrange characters of a string in reverse order
echo strrev($str2);
//strpos(string,search)- returns index of a character from a string  
echo strpos($str1,"i");
//str_replace(search, replace, subject)- It replace a character/word with other character/word in a string
echo str_replace("s", "S", $str1);
//lcfirst(str)- Convert first character of string to lower case
echo lcfirst($str1);
//ucfirst(str)- Convert first character of string to upper case
echo ucfirst($str2);
//strtolower(str)- Convert a string to lower case
echo strtolower($str1);
//strtoupper(str)- Convert a string to upper case
echo strtoupper($str1);
//ucwords(str)- Convert first character of each word to upper case
echo ucwords($str1);
//strcmp(str1, str2)- Compare two strings and returns -1,0,1
echo strcmp("A","A");
//trim(str)- Remove white space from left side of string
echo "hello".trim(" students");
//rtrim(str)- Remove white space from right side of string*/
//explode(delimiter, string)- Convert string to array
$expld=explode(" ", $str1);
echo "<pre>";
print_r($expld);

?>