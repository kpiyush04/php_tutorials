<?php
//------------string function()-------------------
$a="hi my name is piyush kumar";
$b="galgotias university";
$v="betchg cs";

echo "<br>";

//strlen()- returns the length of the sstring
//$x=strlen($a);
echo $a;

echo "<br>";

//strrev() - arreange the chachters of a string in reverse oreder
echo strrev($b);

echo "<br>";

//strpos(string,search)- returns index of a character from a string 
echo strpos($a, "i");

echo "<br>";

//str_replace(search, replace, subject)- it replaces a character/word with other character/word in a string
echo str_replace("s", "S", $a);

echo "<br>";

//lcfirst(str)- converts first character of string to lower case
echo lcfirst($a);

echo "<br>";

//ucfirst(str)- converts first character of string to upper case
echo ucfirst($a);

echo "<br>";

//strtolower(str)- converts a sting to lowercase
echo strtolower($a);

echo "<br>";

//strtoupper(str)- converts a sting to uppercase
echo strtoupper($a);

echo "<br>";

//ucwords(str)- converts first character of each word to upper case
echo ucwords($a);

echo "<br>";

//strtoupper(str)- converts a sting to uppercase
echo strtoupper($a);

echo "<br>";

//strcmp(str1, str2)- comapre two strings and returns -1,0,1
echo strcmp("A", "A");

echo "<br>";

//trim(str)- removes whitespcae from left side of string
echo "hello".trim("students");

echo "<br>";

//rtrim(str)- removes whitespcae from right side of string

//explode(delimiter, string)-convert string to array
$expld=explode(" ", $a);

echo "<br>";

echo"<pre>";
print_r($expld);

?>