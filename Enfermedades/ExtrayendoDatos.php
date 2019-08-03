<?php
    session_start();
    $query = 'SELECT diagnostico, fotoCamara FROM usuarioe';
    $mysqli = mysqli_connect('127.0.0.1','root','1234567890','usuarioenfermedades');
    $respuesta = mysqli_query($mysqli, $query);
    while($consulta = mysqli_fetch_assoc($respuesta)){
      $enfermedad = $consulta['diagnostico'];
      $fotoCamara = $consulta['fotoCamara'];
    }
    $query1 = "SELECT * from enfermedades WHERE idEnfermedad = '$enfermedad'";
    $respuesta1 = mysqli_query($mysqli, $query1);
    while($consulta1 = mysqli_fetch_assoc($respuesta1)){
      $Foto = $consulta1['Foto'];
      $descripcion = $consulta1['descripcion'];
      $medicamentos = $consulta1['medicamento'];
    }

    $med1 = $medicamentos[0];
    $med2 = $medicamentos[1];
    $med3 = $medicamentos[2];
    $med4 = $medicamentos[3];
    $query2 = "SELECT * from medicamentos WHERE idMedicamento = '$med1'";
    $query3 = "SELECT * from medicamentos WHERE idMedicamento = '$med2'";
    $query4 = "SELECT * from medicamentos WHERE idMedicamento = '$med3'";
    $query5 = "SELECT * from medicamentos WHERE idMedicamento = '$med4'";

    $respuesta3 = mysqli_query($mysqli, $query2);
    while($consulta2 = mysqli_fetch_assoc($respuesta3)){
      $FotoMedicamento1 = $consulta2['Foto'];
      $descripcionMedicamento1 = $consulta2['descripcion'];
    }

    $respuesta4 = mysqli_query($mysqli, $query3);
    while($consulta3 = mysqli_fetch_assoc($respuesta4)){
      $FotoMedicamento2 = $consulta3['Foto'];
      $descripcionMedicamento2 = $consulta3['descripcion'];
    }

    $respuesta5 = mysqli_query($mysqli, $query4);
    while($consulta4 = mysqli_fetch_assoc($respuesta5)){
      $FotoMedicamento3 = $consulta4['Foto'];
      $descripcionMedicamento3 = $consulta4['descripcion'];
    }

    $respuesta6 = mysqli_query($mysqli, $query5);
    while($consulta5 = mysqli_fetch_assoc($respuesta6)){
      $FotoMedicamento4 = $consulta5['Foto'];
      $descripcionMedicamento4 = $consulta5['descripcion'];
    }

    $Foto = json_encode($Foto); //Foto que alude a la enfermedad diagnosticada.
    $fotoCamara = json_encode($fotoCamara); //Foto que la microcamara tomará del paciente.
    $enfermedad = json_encode($enfermedad); //Diagnostico final de la inteligencia artificial.
    $descripcion = json_encode($descripcion);//descripción de la enfermedad diagnosticada.


    $FotoMedicamento1 = json_encode($FotoMedicamento1);
    $descripcionMedicamento1 = json_encode($descripcionMedicamento1);

    $FotoMedicamento2 = json_encode($FotoMedicamento2);
    $descripcionMedicamento2 = json_encode($descripcionMedicamento2);


    $FotoMedicamento3 = json_encode($FotoMedicamento3);
    $descripcionMedicamento3 = json_encode($descripcionMedicamento3);


    $FotoMedicamento4 = json_encode($FotoMedicamento4);
    $descripcionMedicamento4 = json_encode($descripcionMedicamento4);

    $arrayFinal = $Foto.'&'.$fotoCamara.'&'.$enfermedad.'&'.$descripcion.'&'.$FotoMedicamento1.'&'.$descripcionMedicamento1.'&'.$FotoMedicamento2.'&'.$descripcionMedicamento2.'&'.$FotoMedicamento3.'&'.$descripcionMedicamento3.'&'.$FotoMedicamento4.'&'.$descripcionMedicamento4;
    echo $arrayFinal;
 ?>
