<?php
  session_start();
  $datos=$_POST['dataUsuario'];
  $datosdec=json_decode($datos);
  $arregloData = [$email, $nombre, $apellidoPaterno, $apellidoMaterno, $personas, $banos, $regaderas, $tomasAgua, $contrasena, $medidor, $direccion];
  $regex=["/\w+@\w+\.+[a-z]/","/^[A-Za-z\s]+$/","/^([0-9]{1,2})$/"];
  $validacion=false;
  function comprobarCorreo($corr){
    $correo = $corr;
    $conexion= new mysqli("localhost","root","1234567890","usuario");
    $verificarEmail =mysqli_query($conexion, "SELECT * FROM usuario WHERE CorreoElectronico = '$correo'");
    $varCon = mysqli_num_rows($verificarEmail);
    mysqli_close($conexion);
    return $varCon;
  }
  function comprobarMedidor($med){
    /*
    $medidor = $med;
    $conexion= new mysqli("localhost","root","1234567890","medidores");
    $verificarMedidor =mysqli_query($conexion, "SELECT * FROM medidores WHERE medidor = '$medidor'");
    $varCon = mysqli_num_rows($verificarMedidor);
    mysqli_close($conexion);
    return $varCon;
    */
    return 0;
  }
  if(sizeof($datosdec)> 11 ){
    echo "Imposible conexión al servidor!";
    header("Location: USUARIO/InicioUsuario.html");
  }
  else{
    for($i = 0; $i < sizeof($datosdec); $i++)
       $arregloData[$i] = $datosdec[$i];
    if(preg_match($regex[0],$arregloData[0])==0)
      $validacion=true;
    for ($i=1; $i <=3; $i++) {
      if(preg_match($regex[1],$arregloData[$i])==0)
         $validacion=true;
      else if(preg_match($regex[2],$arregloData[$i+3])==0)
          $validacion=true;
    }
    if(preg_match($regex[2],$arregloData[7])==0)
        $validacion=true;
    if($validacion==true){
       echo "Error al ingresar al sistema.";
       header("Location: index.php");
     }
    else{
      //Algoritmo que te envíe un correo en donde tu puedas abrir un link para poder registrate.
      $arregloData[8]=password_hash($arregloData[8],PASSWORD_BCRYPT,[15]);
      if(comprobarCorreo($arregloData[0])==0){
          if(comprobarMedidor($arregloData[9]) == 0){
              echo "Te hemos enviado un correo para registrar, favor de abrir el link!";
              $_SESSION['data'] = $arregloData;
              $_SESSION['validacion'] = $validacion;
          }
        }else{
          echo"El medidor o el correo ya fueron registrados";
        }
    }
  }
?>
