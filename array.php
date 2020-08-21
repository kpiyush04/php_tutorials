<style type="text/css">
	*{
		font-family: arail;
		padding: 10px;
		margin: 1px;
		margin-top: 1px;
		margin-bottom: 1px;
	}
	.rpt
	{
		border: 1px solid #ccc;
		box-shadow: 0px 0px 5px #ccc;

	}
	.rpt tr:frist-child
	{
		background-color: #406299;
		color: #fff;
	}
	.even
	{
		background-color: #fff7c9;
	}
	.rpt tr:frist-child
	{
		background-color: #;
	}
</style>
<?php
	/*-------------------ARRAY------------------
	waht is array?
	>>> An array is the collection of similar data types.
		but a php can hold elements of different data types.
		php array can be divided into two parts:-
		1)indexed or numeric indexed array
			>>>>an index array hold the elements on numeric keys
		2)associative array
			>>>>an associative hold the elements on user defined keys

	how to define an array in php?
	>>>	an blank arrayvariable=array()

	values assignment to an array in php:-

		>>>variable=array (10,25.2,true,"hi")
		>>>variable=array (0=>10, 1=>25.2, 2=>true, 3=>"hi")
		>>>variable [0]=10
		>>>variable []=10

	how to call a value from a php array?
	>>> echo variable[index]

	how to initialize an associative array?
	>>> variable=array ("name"=>"piyush", "city"=>"roorkee", "mobile"=>9899948383)		
?>*/

	$students=array("ankit", "piyuhs", "bhanu", "rahul");
	$regno=array('101, 102, 103, 104');
	$hindi = array(75, 72, 79, 82);
	$english = array(78, 77, 65, 85);
	//echo $students[1]; output->bhanu
	echo "table border='1'>";
	echo "<tr>";
	echo "<td>Roll no</td>";
	echo "<td>name</td>";
	echo "<td>hindi</td>";
	echo "<td>english</td>";
	echo "<td>total</td>";
	echo "</tr>";
	for ($i=0;i<count($students);$i++)
	{
		echo "<tr>";
		echo "<td>".regno[$i]."</td>";
		echo "<td>".$students[$i]."</td>";
		echo "<td>".$hindi[$i]."</td>";
		echo "<td>".$english[$i]."</td>";
		echo "<td>".$ttl."</td>";
	}

?>