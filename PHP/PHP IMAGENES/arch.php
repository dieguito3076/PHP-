<?php 
	//print_r($_FILES['archpru']);
	$ruta = 'imagenes/';
	$ruta_archivo = $ruta.basename($_FILES['archpru']['name']); //basename es para poder quitar caracteres ajenos a la cadena.
	//echo $ruta_archivo;
	$tipo = strtolower(pathinfo($ruta_archivo, PATHINFO_EXTENSION));
	//echo "<br />";
	//echo $tipo; //PARA VALIDAR, PODEMOS COMPARAR LA VARIABLE TIPO CON REGEX.
	if(move_uploaded_file($_FILES['archpru'][tmp_name], $ruta_archivo)){
			echo "archivo cargado";
			$ruta_archivo2 = $ruta.basename('paisaje2.'.$tipo); //basename es para poder quitar caracteres ajenos a la cadena.
			copy($ruta_archivo, $ruta_archivo2); //copiar el contenido de una string a otra.
		}
		else
			echo"archivo no cargado";
	/*if(file_exists($ruta_archivo)){
		echo "el archivo existe";
		unlink($ruta_archivo); //Para eliminar el archivo
	}
	else{
		if(move_uploaded_file($_FILES['archpru'][tmp_name], $ruta_archivo)){
			echo "archivo cargado";
			echo '<img src = "'.$ruta_archivo.'" name = "foto"/>';
		}
		else
			echo"archivo no cargado";
	}
	*/
?>