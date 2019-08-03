<html>
	<head></head>
	<body>
		<h1>Trabaja con nosotros</h1>
		<form method = "POST" action = "upload.php" enctype = "multipart/form-data" >
			<div><span>Nombre</span><input type = "text" id = "nombre" name = "nombre" required /></div>
			<div><span>Email</span><input type = "email" name = "correo" required /></div>
			<div><span>Tu CV</span><input type = "file" name = "cv" /><small>Solo PDF, ODT, DOCX</small></div>
			<div><input type = "submit" value = "enviar"></div>
		</form>
	</body>
</html>
<script type = "text/javascript">
	var n = document.getElementById('nombre');
	var a = document.getElementById('archivo');
	var f = document.getElementsByTagName('form')[0];
		f.onsubmit = function(){
			var er = /[a-z]+i/;
			var rta = er.test(n.value);
			if(rta == false){
			    alert("No coincide");
			    return false;
			}
			return true;
		}
</script>