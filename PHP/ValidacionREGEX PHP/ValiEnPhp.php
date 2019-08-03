<html>
	<head></head>
	<body>
		<h1>Trabaja con nosotros</h1>
		<form method = "POST" action = "hola.php" enctype = "multipart/form-data" >
		    <?php 
				if(isset( $_GET['error'])){
					echo '<p style = "background: lightred; color = darkred">'.$_GET['error'].'</p>';
				}
			?>
			<div><span>Nombre</span><input type = "text" id = "nombre" name = "nombre" required /></div>
			<div><span>Email</span><input type = "email" name = "correo" required /></div>
			<div><span>Tu CV</span><input type = "file" name = "cv" /><small>Solo PDF, ODT, DOCX</small></div>
			<div><input type = "submit" value = "enviar"></div>
		</form>
	</body>
</html>
