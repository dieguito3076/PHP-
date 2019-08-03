<?php

	$mi_arreglo = array ('nombre'=>'Juan', 'edad'=>18, 'sexo'=>'Masculino');
	$mi_arrenum = array (1,6,8,3,2);
	$mi_arrenum2 = array (78,65,18,30,82);
	
	echo 'Caso 1:';
	echo '<br/>';
	print_r($mi_arreglo);
	echo '<br/>';
	$mi_arreg2 = array_change_key_case($mi_arreglo, CASE_UPPER);	
	print_r($mi_arreg2);
	echo '<br/><br/>';
	
	echo 'Caso 2:';
	echo '<br/>';
	print_r($mi_arreglo);
	echo '<br/>';
	$mi_arreg2 = array_keys($mi_arreglo);
	print_r($mi_arreg2);
	echo '<br/><br/>';
	
	echo 'Caso 3:';
	echo '<br/>';
	print_r($mi_arreglo);
	echo '<br/>';
	$resul = array_key_exists ( 'edad', $mi_arreglo );
	echo 'La clave edad existe en el arreglo?:'.$resul.'<br/>';
	$resul = array_key_exists ( 'hola', $mi_arreglo );
	echo 'La clave hola existe en el arreglo?:'.$resul.'<br/><br/>';
	
	echo 'Caso 4:';
	echo '<br/>';
	print_r($mi_arreglo);
	echo '<br/>';
	$resul = in_array( 'Juan', $mi_arreglo);
	echo 'La palabra Juan existe en el arreglo?:'.$resul.'<br/><br/>';
	print_r($mi_arrenum);
	echo '<br/>';
	$resul = in_array( '8', $mi_arrenum);
	echo 'El \'8\' existe en el arreglo?:'.$resul.'<br/>';
	$resul = in_array( 8, $mi_arrenum,TRUE);
	echo 'El 8 existe en el arreglo?:'.$resul.'<br/><br/>';
	
	echo 'Caso 5:';
	echo '<br/>';
	print_r($mi_arrenum);
	echo '<br/>';
	$resul = array_search ( '8', $mi_arrenum);
	echo 'El \'8\' existe en el lugar del arreglo :'.$resul.'<br/>';
	echo '<br/>';
	print_r($mi_arreglo);
	echo '<br/>';
	$resul = array_search ( 18, $mi_arreglo);
	echo 'El valor existe en el arreglo en la clave:'.$resul.'<br/><br/>';
	
	echo 'Caso 6:';
	echo '<br/>';
	print_r($mi_arreglo);
	echo '<br/>';
	$resul = array_unshift($mi_arreglo, 'hola');
	echo 'El efecto en el arreglo:';
	print_r ($mi_arreglo);
	echo '<br/>';
	echo 'El resultado guardado en variable:'.$resul.'<br/><br/>';
	
	echo 'Caso 7:';
	echo '<br/>';
	print_r($mi_arreglo);
	echo '<br/>';
	$resul = array_shift($mi_arreglo);
	echo 'El efecto en el arreglo:';
	print_r ($mi_arreglo);
	echo '<br/>El resultado guardado en variable:'.$resul.'<br/><br/>';
	
	echo 'Caso 8:';
	echo '<br/>';
	print_r($mi_arreglo);
	echo '<br/>';
	$resul = array_push($mi_arreglo, 'hola2', 'hola3');
	echo 'El efecto en el arreglo:';
	print_r ($mi_arreglo);
	echo '<br/>El resultado guardado en variable:'.$resul.'<br/><br/>';
	
	echo 'Caso 9:';
	echo '<br/>';
	print_r($mi_arreglo);
	echo '<br/>';
	$resul = array_pop($mi_arreglo);
	echo 'El efecto en el arreglo:';
	print_r ($mi_arreglo);
	echo '<br/>El resultado guardado en variable:'.$resul.'<br/><br/>';
	
	echo 'Caso 10:';
	echo '<br/>';
	echo 'Primera forma <br/>';
	$mi_arreglo2 = array_slice ($mi_arreglo, 2);
	// $mi_arreglo2 recibe una copia de los elementos de $mi_arreglo iniciando por el elemento con índice 2 y hasta final
	echo 'Contenido de mi arreglo:';
	print_r($mi_arreglo);
	echo '<br/>';
	echo 'Contenido de mi arreglo2:';
	print_r($mi_arreglo2);
	echo '<br/>';
	echo 'Segunda forma <br/>';
	$mi_arreglo2 = array_slice ($mi_arreglo, 1,2); 
	// $mi_arreglo2 recibe una copia de 2 elementos de $mi_arreglo iniciando por el elemento con índice 1
	echo 'Contenido de mi arreglo:';
	print_r($mi_arreglo);
	echo '<br/>';
	echo 'Contenido de mi arreglo2:';
	print_r($mi_arreglo2);
	echo '<br/>Tercera forma <br/>';
	$mi_arreglo2 = array_slice ($mi_arreglo, -3,2); 
	// $mi_arreglo2 recibe una copia de 2 elementos de $mi_arreglo iniciando por el tercer elemento de izquierda a derecha
	echo 'Contenido de mi arreglo:';
	print_r($mi_arreglo);
	echo '<br/>';
	echo 'Contenido de mi arreglo2:';
	print_r($mi_arreglo2);
	echo '<br/><br/>';
	
	echo 'Caso 11:';
	echo '<br/>';
	print_r($mi_arrenum);
	echo '<br/>';
	$mi_arrenum3 = array_splice ($mi_arrenum, 2);
	// Copia a $arrenum3 los elementos que se encuentran en $mi_arrenum a partir del que tiene indice 2 y deja el resto en
	// $mi_arrenum
	echo 'Contenido de mi arreglo 3:';
	print_r($mi_arrenum3);
	echo '<br/>';
	print_r($mi_arrenum);
	echo '<br/><br/>';
	
	$mi_arrenum = array (1,6,8,3,2);
	$mi_arrenum2 = array (78,65,18,30,82);
	print_r($mi_arrenum);
	echo '<br/>';
	print_r($mi_arrenum2);
	echo '<br/>';
	array_splice ($mi_arrenum, 1,2,$mi_arrenum2);
	//Inserta $mi_arrenum2 en $mi_arrenum a partir del elemento 1 y sustituye dos elementos y respeta el resto
	echo 'Contenido de mi arreglo:';
	print_r($mi_arrenum);
	echo '<br/>';

?>
