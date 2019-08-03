<?php
	session_start();
  $array = array();
  for($i = 0; $i<12; $i++)
     $array[$_POST[$i]] = $_POST[ $i +12];
   $_SESSION['Data'] = $array;
?>
<html>
  <head>
      <title>Formulario de Calificaciones</title>
      <style>
        #table{
          background-color: black;
          color: white;
          position: absolute;
          left:200px;
          top: 120px;
        }
      </style>
  </head>
  <body>
    <h1>Formulario de recepci&oacute;n de Datos Calificaciones</h1>
    <table id = 'table' border='1px'>
      <caption style="color:black"> ALUMNOS CON SUS CALIFICACIONES</caption>
        <?php
                echo"<tr>";
                echo"<th>ALUMNOS </th>";
                echo"<th>CALIFICACION </th>";
                echo"</tr>";
                foreach ($array as $key => $value) {
                   echo"<tr><td> $key</td>";
                   echo"<td> $value </td></tr><br />";
                }
        ?>
    </table>
    <form action = 'ordenamiento.php' method = 'GET'>
            Ordenar Alfabeticamente<input type= 'radio' name= 'var' value='alfa'/><br />
            Ordenar por calificaci&oacute;n<input type= 'radio' name= 'var' value='num'/><br />
            <input type='submit' />
    </form>
  </body>
</html>
