<?php
  session_start();
  $datos=$_POST['cadena'];
  $datos = trim($datos, '[');
  $datos = trim($datos, ']');
  $query = "UPDATE usuarioe set cadenaVal = '$datos' WHERE usuarioKey = 1";
  $mysqli = mysqli_connect('127.0.0.1', 'root', '1234567890', 'usuarioenfermedades');
  $resul = mysqli_query($mysqli, $query);
  $mysqli ->close();
?>
