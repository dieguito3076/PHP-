<?php
    $resp=array(10);
	$i=0;
    foreach($_GET as $valor)
	{
		$resp[$i]=$valor;
		$i++;
	}
	print_r($resp)
?>