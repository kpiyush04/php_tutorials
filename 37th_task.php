<?php
if (isset($_POST['submit']))
{
	$n=$_POST['name'];
	$m=$_POST['mobl'];
	$em=$_POST['mail'];
	$s=$_POST['salary'];
	$p=$_POST['pf'];
	$d=$_POST['da'];
	$t=$_POST['ta'];
	$h=$_POST['hra'];
	$e=$_POST['esi'];
	$obj=new employee();
	$obj->input($n,$m,$em,$s,$p,$d,$t,$h,$e);
	$obj->gsalary($n,$m,$em,$s,$p,$d,$t,$h,$e);
	$obj->output();
}
//class initiation
class employee
{

	//member declaraction
	public $name;
	public $mobile;
	public $email;
	public $salary;
	public $pf;
	public $da;
	public $ta;
	public $hra;
	public $esi;
	public $gsal;
//methods
	function input($n,$m,$em,$s,$p,$d,$t,$h,$e)
{

	$this->name=$n;
	$this->mob=$m;
	$this->email=$em;
	$this->salary=$s;
	$this->pf=$p;
	$this->da=$d;
	$this->ta=$t;
	$this->hra=$h;
	$this->esi=$e;
	$this->gsal=$this->salary+$this->da+$this->ta+$this->hra-$this->esi-$this->pf;
}
function gsalary()
{
	$this->gsal=$this->salary+$this->da+$this->ta+$this->hra-$this->esi-$this->pf;
}
function output()
{
	echo "name=".$this->name;
	echo "<br>mobile=".$this->mob;
	echo "<br>e-mail=".$this->email;
	echo "<br>salary=".$this->salary;
	echo "<br>pf=".$this->pf;
	echo "<br>da=".$this->da;
	echo "<br>ta=".$this->ta;
	echo "<br>hra=".$this->hra;
	echo "<br>esi=".$this->esi;
	echo "<br>gsal=".$this->gsal;
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>SALARY FORM</title>
</head>
<body>
<form method="post">
	<table border="1" align="center" cellspacing="6" cellpadding="8">
		<tr>
			<td>name</td>
			<td><input type="text" name="name"></td>
		</tr>

				<tr>
					<td>mobile</td>
			<td><input type="text" name="mobl"></td>
		</tr>

				<tr>
				<td>E-mail</td>
			<td><input type="text" name="mail"></td>
			
		</tr>

				<tr>
					<td>basic salary</td>
			<td><input type="text" name="salary"></td>
			</tr>

				<tr>
					<td>pf</td>
			<td><input type="text" name="pf"></td>
			
		</tr>
				<tr>
					<td>da</td>
			<td><input type="text" name="da"></td>
			
		</tr>
				<tr>
					<td>ta</td>
			<td><input type="text" name="ta"></td>
		</tr>
				<tr>
					<td>hra</td>
			<td><input type="text" name="hra"></td>
			
		</tr>
				<tr>
					<td>esi</td>
			<td><input type="text" name="esi"></td>
		
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="submit"></td>
			<td><input type="reset" name="reset"></td>
		</tr>

	</table>
</form>
</body>
</html>