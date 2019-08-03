<?php
session_start();
$correoE = $_SESSION['correo'];
$query =  "SELECT Nombre, ApellidoPaterno, ApellidoMaterno,  idMedidor, CorreoElectronico, direccion  FROM usuario WHERE CorreoElectronico	 ="."'".$correoE."'";
$mysqli = mysqli_connect('127.0.0.1', 'root', '1234567890', 'usuario');
$resul = mysqli_query($mysqli, $query);
$mysqli ->close();
$gasto= array();
$fechas= array();
$i=0;
while($consulta=mysqli_fetch_assoc($resul)){
  $consultaNom = $consulta['Nombre'].'|'.$consulta['ApellidoPaterno'].'|'.$consulta['ApellidoMaterno'].'|'.$consulta['CorreoElectronico'].'|'.$consulta['idMedidor'].'|'.$consulta['direccion'];
}
echo $consultaNom;

?>
