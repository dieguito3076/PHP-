<?php 
	//Extracción de datos de base en el servidor. 
	function actualizar(){
		header('Content-Type: application/json');
		define('DB_HOST', '127.0.0.1');
		define('DB_USERNAME', 'root');
		define('DB_PASSWORD', '1234567890');
		define('DB_NAME', 'ejercicio1');
		$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
		if(!$mysqli)
			die("Conexión fallida: ".$mysqli->error);
		//$query = "SELECT Clientes, NombreClientes FROM clientes ORDER BY Clientes";
		$query = "SELECT montoVenta FROM ventas";
		$resul = $mysqli->query($query);
		$data = array();
		foreach ($resul as $row) 
			$data[] = $row;
		$resul ->close();
		$mysqli ->close();
		print json_encode($data);
		#print_r($data);
	}
	actualizar();
?>