<?php
session_start();
$nombre = 'Diego Velázquez';
$correo = 'diegovelazqu@hotmail.com';
$medidor = '123-A';
$recomendacion = 'ABCDEF';
$promedioDia = 5534.5; //último gasto
$escala = 47;
$_SESSION['usuario'] = $nombre;
$_SESSION['recomendacion'] = $recomendacion;
$_SESSION['correo'] = $correo;
$_SESSION['idMedidor'] = $medidor;
$_SESSION['escala'] = $escala;
$_SESSION['promedioDiaUsuario'] = $promedioDia;
echo $nombre;
echo $correo;
echo $medidor;
echo $promedioDia;
echo $recomendacion;
echo $escala;

header("C:\AppServ\www\PRUEBAOJO!!!!!\InicioRegistro\USUARIO\InicioUsuario.php");

?>
