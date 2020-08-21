	<?php
function si($p,$r,$t)
{
	return $p*$r*$t/100;

}

//calling
$getval=si(5000,2.5,3);
echo "Net payble amount=".(5000+$getval);
?>