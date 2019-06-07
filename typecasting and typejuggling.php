<?php
	//typecasting -used to change a data type to other data type
	$a=20;
	$b="23";
	echo "<p> before typecasting </p>";
	var_dump($b);
	$b=(int)$b;   //typecasting
	echo "<p> after type casting </P>";
	var_dump($b);
?>



<?php
	//typejuggling can perform arithemetic operations between two and more strings and numbers but strng should be in following patterns
	//1.stirngs should start with a number
	//2.there is no prefrence given to any number if we start a string with more than one number serperated by comma or whitespace( )thenonly first number will be used in operation.
	//3.juggling can be performed between two or more strings and any of them is string or number
$price=25;
$apples="10 apples in stock";
echo $price*$apples;
?>