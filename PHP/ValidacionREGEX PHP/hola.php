<?php 
	$nombre = $_POST['nombre'];
	$email = $_POST['correo'];
	$cv = $_FILES['cv'];
	
	$er1 = "/^[a-z]{3,}$/i";
	$er2 = "/\.(pdf|odt|docx?)$/i";
	
	$rta1 = preg_match($er1, $nombre);
	$rta2 = preg_match($er2, $cv['name']);
	
	if($rta1 == false){ header("Location: index.php?error = Nombre inválido");}
	if($rta2 == false){ header ("Location: index.php?error = Formato de archivo inválido");}
?>