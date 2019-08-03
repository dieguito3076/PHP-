<html>
<head>
  <title>Colores</title>
  <style>
  #a{
    background-color: blue;
    padding:15px;
  }
  #e{
    background-color: red;
    padding:15px;
  }
  #i{
    background-color: green;
    padding:15px;
  }
  #o{
    background-color: pink;
    padding:15px;
  }
  #u{
    background-color: black;
    color: white;
    padding:15px;
  }
  #b{
    background-color: white;
    padding:15px;
  }
  </style>
</head>
<body>
  <?php
    $arregloAsociativo = array();
    $arreglo =['a', 'e', 'i', 'o', 'u', 'b'];
    $arregloAsociativo['azul'] = 'blue';
    $arregloAsociativo['rojo'] = 'red';
    $arregloAsociativo['verde'] = 'green';
    $arregloAsociativo['rosa'] = 'pink';
    $arregloAsociativo['negro'] = 'black';
    $arregloAsociativo['blanco'] = 'white';
    echo"<table border = 3px>";
    echo"<th>COLORES</th>";
    echo"<th>COLORS</th>";
    $i = 0;
    foreach ($arregloAsociativo as $key => $value) {
       echo"<tr id = '$arreglo[$i]'><td> $key</td>";
       echo"<td id = '$arreglo[$i]'> $value </td></tr><br />";
       $i = $i +1;
    }
    echo"</table>";
  ?>
</body>
</html>
