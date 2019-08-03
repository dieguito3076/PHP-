<?php
    session_start();
    $datos=$_POST['sesion'];
    $datosdec=json_decode($datos);
    $nombre = "";
    $contraseña = "";
    $nomed = "";
    $hash = "";
    function comprobarCorreo($corr){
      $correo = $corr;
      $conexion= new mysqli("localhost","root","1234567890","usuario");
      $verificarEmail =mysqli_query($conexion, "SELECT * FROM usuario WHERE CorreoElectronico = '$correo'");
      $varCon = mysqli_num_rows($verificarEmail);
      mysqli_close($conexion);
      return $varCon;
    }
    if(comprobarCorreo($datosdec[1])!=0){
      $conexion= new mysqli("localhost","root","1234567890","usuario");
      $query =mysqli_query($conexion, "SELECT Nombre,Contrasena,idMedidor,Contrasena FROM usuario WHERE CorreoElectronico ='$datosdec[1]'");
      while($row=mysqli_fetch_assoc($query)){
        $nombre=$row['Nombre'];
        $contraseña=$row['Contrasena'];
        $nomed=$row['idMedidor'];
        $hash=$row['Contrasena'];
      }
      if(password_verify($datosdec[0],$contraseña)){
         echo "entre";
          header("Location: localhost/PRUEBAOJO!!!!!/InicioRegistro/USUARIO/InicioUsuario.php");
          //header("Status: 301 Moved Permanently", true, 301);
       }
      else{
        echo "contraseña incorrecta";
      }
    }
    else
      echo "el correo aun no ha sido registrado";
?>
