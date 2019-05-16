<?php
	$ps=md5('andy123456'); 
$acv = "kuiol9skdsmdwrewrq99908765rftyu7";
$dacv= md5($acv . md5($ps) . $acv );
echo"$dacv";
		?>