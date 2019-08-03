<?php
    session_start();
    $data = $_SESSION['data'];
    if($data != ""){
          $data = $_SESSION['data'];
          $con= new mysqli("localhost","root","1234567890","usuario");
      		$string = "INSERT INTO usuario(nombre, apellidoPaterno, ApellidoMaterno, idMedidor, CorreoElectronico, Contrasena, direccion) VALUES ".'('."'".$data[1]."'".','."'".$data[2]."'".','."'".$data[3]."'".','."'".$data[9]."'".","."'".$data[0]."'".','."'".$data[8]."'".","."'".$data[10]."'".')';
          $string2 = "INSERT INTO usuariopart1(idUsuario, NumBanos, NumRegaderas, TomasDeAgua, Habitantes) VALUES ".'('."'".$data[0]."'".','."'".$data[5]."'".','."'".$data[6]."'".','."'".$data[7]."'".","."'".$data[4]."'".')';
          echo $string;
          if ($con->query($string) === TRUE) {
            mysqli_close($con);
            $con2= new mysqli("localhost","root","1234567890","usuariopart1");
            if ($con2->query($string2) === TRUE) {
                echo '<script>
                       alert("Usuario registrado satisfactoriamente!");
                       </script>';
              } else {
                echo '<script>
                       alert("Sucedió un error al registrar!");
                       window.history.go(-1);
                       </script>';
                echo $string;
              }
              mysqli_close($con2);
      			} else {
      				echo '<script>
      				       alert("Sucedió un error al registrar!");
      				       </script>';
              echo $string;
      			}
    }else{
      echo '<script>
             alert("Error al registrar.");

             </script>';

    }
    session_destroy();
?>
