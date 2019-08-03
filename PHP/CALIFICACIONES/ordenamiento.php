<?php
	session_start();
  $array = array();
  $array = $_SESSION['Data'];
	$opcion = $_GET['var'];
	if($opcion == 'num')
	      natcasesort($array);
  else
  	    ksort($array);
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
    <h1>ORDENAMIENTO DE DATOS</h1>
    <table  id ='table' border='1px'>
      <caption style="color:black"> ALUMNOS CON SUS CALIFICACIONES ALFAB</caption>
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
  </body>
</html>
