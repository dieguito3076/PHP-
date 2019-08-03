<?php
	echo "<html>";
	echo "<head>";
	echo "<title>Tabla de Ajedrez</title>";
	echo "</head>";
	echo "<body>";
			echo "<Table>";
				$columnas = $_GET['colu'];
				$renglones = $_GET['reng'];
				$var = 0;
				for($ren = 1; $ren<=$renglones; $ren++){
					echo "<tr>";
					for($col = 1; $col <= $columnas; $col++){
						if($var == 0){
                        	$var = 1;
                        	echo "<td style='color: white; background:black; padding:15px;'> '$var' </td>"; 
		                }
		                else if($var == 1){
		                    $var = 0;
		                    echo "<td style='color: black; background:white; padding:15px;' > '$var' </td>";
		                }
					}
					if($columnas % 2 == 0 and $var == 1)
				            $var = 0;   
				    else if($columnas % 2 == 0 and $var == 0)
				            $var = 1;
					echo "</tr>";
				}
			echo "</Table>";
	echo "</body>";
	echo "</html>";
?>
