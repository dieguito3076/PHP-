<?php
	$x = array(7,8,9,4);
	$asoc = array('nombre' => 'Diego', 'edad' => 18, 'sexo' =>'M');
	$i = 0;
	for($i = 0; $i<4;$i++)
		echo $x[$i].'<br />';
	$x[4]=100;
	$x[5]=150;
	foreach($x as $valor)
		echo $valor.'<br />';
	foreach($asoc as $ind => $valor)
		echo 'La clave: '.$ind.'tiene como valor '.$valor.'<br />';
	var_dump($x);
	echo '<br />';
	var_dump($asoc);
?>	