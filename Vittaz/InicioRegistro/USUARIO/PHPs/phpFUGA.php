<?php
  session_start();
  $idMed = $_SESSION['idMedidor'];
  $query = 'SELECT gastoCrudo, hora FROM lecturasusuario WHERE idMedidor ='."'".$idMed."'";
  $mysqli = mysqli_connect('127.0.0.1', 'root', '1234567890', 'lecturasusuario');
  $resul = mysqli_query($mysqli, $query);
  $mysqli ->close();
  $gasto= array();
  $fechas= array();
  $i=0;
  while($consulta=mysqli_fetch_assoc($resul)){
    $gasto[$i]=$consulta['gastoCrudo'];
    $fechas[$i]=$consulta['hora'];
    $i++;
  }
  $arrayGasto = json_encode($gasto);
  $arrayDates = json_encode($fechas);
  $finalArray = $arrayDates.'&'.$arrayGasto;
  echo $finalArray;
?>
