<?php
session_start();
$correo = $_SESSION['correo'];
$query = "SELECT GastoPorDia, dia FROM gastodia WHERE idCorreo ="."'".$correo."'";
$mysqli = mysqli_connect('127.0.0.1', 'root', '1234567890', 'gastousuario');
$resul = mysqli_query($mysqli, $query);
$mysqli ->close();
$gasto= array();
$fechas= array();
$i=0;
while($consulta=mysqli_fetch_assoc($resul)){
  $gasto[$i]=$consulta['GastoPorDia'];
  $fechas[$i]=$consulta['dia'];
  $i++;
}
$arrayGasto = json_encode($gasto);
$arrayDates = json_encode($fechas);
$finalArray = $arrayDates.'&'.$arrayGasto;
echo $finalArray;
?>
