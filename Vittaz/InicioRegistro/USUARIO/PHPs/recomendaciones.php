<?php
    function obtenerRecomendaciones(){
        session_start();
        $recomendacionesArray = [$reco1, $reco2, $reco3, $reco4, $reco5, $reco6];
        $recomendacion= $_SESSION['recomendacion'];
        for($i = 0; $i<6; $i++){
              $query =  "SELECT tuRecomendacion, foto FROM recomendacion  WHERE idRecomendacion ="."'".$recomendacion[$i]."'";
              $mysqli = mysqli_connect('127.0.0.1', 'root', '1234567890', 'recomendaciones');
              $resul = mysqli_query($mysqli, $query);
              $mysqli ->close();
              while($consulta=mysqli_fetch_assoc($resul)){
                $recomendacionesArray[$i][1] = $consulta['foto'];
                $recomendacionesArray[$i][0] = $consulta['tuRecomendacion'];
              }
        }
        $_SESSION['recomendacionesPant'] = $recomendacionesArray;
      }
?>
