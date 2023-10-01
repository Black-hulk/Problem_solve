<?php
	$date1=new DateTime("1981-11-03");
	$date2=new DateTime("2013-09-04");
	$dif=$date1->diff($date2);
	echo "Difference: ". $dif->y . " Years ".$dif->m. " Months ". $dif->d. " Days";
?>