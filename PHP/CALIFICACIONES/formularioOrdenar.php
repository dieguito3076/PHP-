<html>
  <head>
      <title>Formulario de Calificaciones</title>
  </head>
  <body style = "color:white; background-color:blue;">
    <h1 stylr = "color:black;">Formulario de Ingreso de Datos Calificaciones</h1>
    <form action = 'formulario.recibir.php' method = 'POST'>
       <?php
            for($i = 0; $i<12; $i++){
              $var = $i +12;
              echo "Ingresar Nombre:  <input style=background-color:yellow; type= 'text' name= $i maxlength = '30' size = '30'/>";
              echo "Ingresar Calificacion:   <input  style=background-color:yellow; type= 'text' name= $var  maxlength='2' size = '2'/><br />";
              echo "<br />";
            }
        ?>
        <input type='submit' />
    </form>
  </body>
</html>
