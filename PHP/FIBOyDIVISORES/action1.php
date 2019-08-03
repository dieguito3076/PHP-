<?php
	session_start();
	include 'funciones.php';
	$opcion = $_SESSION['op'];
	$numero = $_POST['num'];
	if ($opcion == 'fibo')
        fibo($numero);
    else 
        divi($numero);
	session_unset();
	session_destroy();
?>
