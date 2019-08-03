<?php
  session_start();
  $query = 'SELECT lectura FROM lecturastemp';
  $query1 = 'SELECT lectura FROM lecturaspulso';
  $query2 = 'SELECT lectura FROM lecturasresp';
  $mysqli = mysqli_connect('127.0.0.1', 'root', '1234567890', 'usuarioenfermedades');
  $resul = mysqli_query($mysqli, $query);
  $resul1 = mysqli_query($mysqli, $query1);
  $resul2 = mysqli_query($mysqli, $query2);
  $mysqli ->close();
  $temp= array();
  $pulso= array();
  $resp = array();
  $a = 0;
  $i = 0;
  $u = 0;
  while($consulta=mysqli_fetch_assoc($resul)){
    $temp[$i]= $consulta['lectura'];
    $i++;
  }
  while($consulta1=mysqli_fetch_assoc($resul1)){
    $pulso[$u]= $consulta1['lectura'];
    $u++;
  }
  while($consulta2=mysqli_fetch_assoc($resul2)){
    $resp[$a]= $consulta2['lectura'];
    $a++;
  }
  $arrayTemp = json_encode($temp);
  $arrayPulso = json_encode($pulso);
  $arrayResp = json_encode($resp);

  $finalArray = $arrayTemp.'&'.$arrayPulso.'&'.$arrayResp;
  echo $finalArray;
?>
