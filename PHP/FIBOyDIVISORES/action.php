<?php
	session_start();
	$_SESSION['op'] = $_POST['var'];
?>
<html>
	<head>
		<title></title> 
	</head>
	<body bgcolor = 'black'>
		<font face='Comic Sans MS,arial,verdana' color = 'white'>
		<h1>MATHEMATICA</h1>
		<p>Ingresar el numero.</p>
		<form action = 'action1.php' method = 'POST'>
			<input type='text' name = 'num'>
			<input type = 'submit'>
		</form>
		</font>
	</body>
</html>