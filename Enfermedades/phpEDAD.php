<?php
    session_start();
    $edad = $_GET['edad'];
    $mysqli = mysqli_connect('127.0.0.1', 'root', '1234567890', 'usuarioenfermedades');
    $query = "UPDATE usuarioe SET edad = '$edad' WHERE usuarioKey = 1";
    $resul = mysqli_query($mysqli, $query);
    $mysqli ->close();
?>
