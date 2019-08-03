<?php
  // Gastos: cocina,regadera,baño,lavadoras,jardin,extra
  session_start();
  $correo = $_SESSION['correo'];
  $resultados = [];
  $incremento = 0;
  function conexion($table, $querys, $res){
    global $resultados;
    global $incremento;
    $conexion = mysqli_connect('127.0.0.1', 'root', '1234567890', $table);
    $query = $querys;
    $respuesta = mysqli_query($conexion, $query);
    $conexion ->close();
    while($consulta=mysqli_fetch_assoc($respuesta)){
       $resultados[$incremento]=$consulta[$res];
       $incremento++;
    }
    return  $resultados;
  }
  conexion('usuariopart1', "SELECT actividad FROM usuariopart1 WHERE idUsuario = '$correo'", 'actividad');
  conexion('gastousuario', "SELECT * FROM gastodia WHERE idCorreo = '$correo'", 'GastoPorDia');
  conexion('usuario', "SELECT varEstado, Escala FROM usuario WHERE correoElectronico = '$correo'", 'Escala');
  conexion('usuario', "SELECT varEstado, Escala FROM usuario WHERE correoElectronico = '$correo'", 'varEstado');
  $resultados = json_encode($resultados);
  echo $resultados;
?>
