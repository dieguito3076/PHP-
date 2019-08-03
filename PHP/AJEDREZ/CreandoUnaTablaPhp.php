<html>
<head>
  <style>
    #tdi{
      background-color: blue;
      color:white;
      padding:15px;
    }
  </style>
</head>
<body>
  <table border="2px">
  <?php
      $cols = 10;
      $ren = 10;
      for($i = 0; $i<$ren;$i++){
          echo"<tr>";
          for($u = 0; $u < $cols; $u++)
               echo"<td id=tdi> $i, $u</td>";
          echo"</tr>";
      }
  ?>
</table>
</body>
</html>
