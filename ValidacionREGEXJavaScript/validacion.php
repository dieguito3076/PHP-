<!DOCTYPE html>
<html>	
	<head>
		<meta charset="UTF-8"/>
	</head>
	<body>
	        Ingresa:<input type="text" name="nombre" pattern='regex sin id' />
	</body>
</html>

Validación en html
<input type="text" name="nombre" pattern='regex sin id' />

Validación en JAVA SCRIPT

var regex1 = "/\w+/";
var regex2 = new RegExp(/\\w+/);

En java SCRIPT usando las cadenas
declarar :
	var regex1 = /Cadena/i;
	var str = "Cadena donde buscar";
	
Métodos de string:
	str.search(regex1);
	str.replace(regex1, "Cadenona");
	
	exec();//Prueba una string regresa el primer match en un array.
	test(); //Prueba una string, regresa true or false.
	toString();//Retorna una cadena con el valor de la regex.
	
FUNCIONES EN PHP

Dentro de php una regex es una string y se puede delimitar con '/', o con '#' de preferencia.
int preg_match:all($regex, $cadena)
Número de coincidencias que encontró y un arreglo que te va a dar las posiciones en donde se encontraron las coincidencias.
