<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset="UTF-8">
	<title>LogInVittaz</title>
	<link rel="stylesheet" type="text/css" href="css/estilos2.css">
	<script src = "validar.js"></script>
</head>
<body>
	<div class = "contenedor-form">
		<div class = "toggle">
			<span>Crear Cuenta</span>
		</div>
		<div class = "formulario" id = "inicio">
			<h2>Iniciar Sesión</h2>
				<input type="text" id = "ingresoEmail" name="ingresoEmail" placeholder="email" required>
				<input type="password" id = "ingresoContra" name="ingresoContra" placeholder="Contraseña" required>
				<input type="submit" value="Iniciar Sesión" onclick="envioInicioSesion();">

		</div>
		<div id = "registro" class = "formulario">
					<h2 class = "crearCuenta">Crear Cuenta</h2>
						<input type="text" id = "email" name = "email" placeholder="Correo Electronico" required>
						<input type="password" id = "contraseña" name = "password" placeholder="Contraseña" required>
						<input type="password" id = "confirmar" name = "confirm_ps" placeholder="Confirmar contraseña" required>
						<input type="text" id = "medidor" name = "NoMedidor" placeholder="Número de Medidor"required >
						<input type="text" id = "direccion" name = "direccion" placeholder="Dirección"required >
						<p id = "submit" class = "toggle2" onclick="validar();">Continuar</p>
		</div>
		<div id = "registro2" class = "formularios">
			<h2>Crear Cuenta</h2>
				<input type="text" id = "usuario" name = "user" placeholder="Nombre/s" required>
				<input type="text" id = "apellidoPat" name = "apellidoPat" placeholder="Apellido Paterno" required>
				<input type="text" id = "aplellidoMat" name = "apellidoMat" placeholder="Apellido Materno" required>
				<input type="text" id = "personas" name = "numeroPersonas" placeholder="Número de personas" required>
				<input type="text" id = "numeroBaños" name = "baños" placeholder="Número de baños" required>
				<input type="text" id = "numeroDeRegaderas" name = "regaderas" placeholder="Número de regaderas" required>
				<input type="text" id = "numeroDeTomasA" name = "tomasDeAgua" placeholder="Número de lavabos/tomas de agua" required>
				<p id = "submit" class = "toggle2" onclick="validar2();">registrarse</p>
		</div>
		<div class="reset-password">
			<a href="#" >Olvidaste tu contraseña?</a>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
