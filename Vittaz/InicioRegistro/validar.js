var usuario, contraseña, confirmarContraseña, email, nomMedidor, direccion;
var arregloDatos = [6];
function validar() {
	contraseña = document.getElementById("contraseña").value;
	confirmarContraseña = document.getElementById("confirmar").value;
	email = document.getElementById("email").value;
	nomMedidor = document.getElementById("medidor").value;
	direccion = document.getElementById("direccion").value;

	var expresion = /\w+@\w+\.+[a-z]/;

	if(contraseña ==="" || confirmarContraseña==="" || email ==="" || nomMedidor ==="" || direccion ===""){
		alert("Todos los campos son obligatorios!");
		return false;
	}
	else if(!expresion.test(email)){
		alert("Correo inválido!");
		return false;
	}
	else if(direccion.length>30){
		alert("Ingresa una dirección válida!");
		return false;
	}
	else if(contraseña != confirmarContraseña){
		alert("La contraseña debe de ser la misma!");
		return false;
	}
	else if(contraseña.length <8){
		alert("La contraseña debe de tener como mínimo 8 caracteres.");
		return false;
	}
	else if(isNaN(nomMedidor) && nomMedidor.length>10){
		alert("Número de medidor inválido");
		return false;
	}
	else {
			$('.formulario').css("display", "none");
			$('.toggle').css("display", "none");
			$('.formularios').animate({
				height:"toggle",
				'padding-top' : 'toggle',
				'padding-bottom':'toggle',
				opacity:'toggle'
			}, "slow");
	}
	return;
}
function validar2(){
	var usuario, apellidoPat, apellidoMat, personas, numeroBaños, numeroDeRegaderas, numeroDeTomasA;
	usuario = document.getElementById("usuario").value;
	apellidoPat = document.getElementById("apellidoPat").value;
	apellidoMat = document.getElementById("aplellidoMat").value;
	personas = document.getElementById("personas").value;
	numeroBaños = document.getElementById("numeroBaños").value;
	numeroDeRegaderas = document.getElementById("numeroDeRegaderas").value;
	numeroDeTomasA = document.getElementById("numeroDeTomasA").value;
	var regexAlpha = new RegExp(/^[A-Za-z\s]+$/);
	var regexNum = new RegExp(/^([0-9]{1,2})$/);
	if(usuario ==="" || apellidoPat==="" || aplellidoMat ==="" || personas ==="" || numeroBaños ===""|| numeroDeRegaderas ==="" || numeroDeTomasA ===""){
		alert("Todos los campos son obligatorios!");
		return false;
	}
	/*
	else if(!(regexAlpha.test(usuario))){
		alert("Nombre de usuario inválido");
		console.log(regexAlpha.test(usuario));
		return false;
	} */
	else if(!(regexAlpha.test(apellidoPat))){
		alert("Apellido Paterno inválido");
		return false;
	}
	else if(!(regexAlpha.test(apellidoMat))){
		alert("Apellido Materno inválido");
		return false;
	}
	else if(!(regexNum.test(personas))){
		alert("Tienes que poner un número en personas!");
		return false;
	}
	else if(!(regexNum.test(numeroBaños))){
		alert("Tienes que poner un número en baños!");
		return false;
	}
	else if(!(regexNum.test(numeroDeRegaderas))){
		alert("Tienes que poner un número en regaderas!");
		return false;
	}
	else if(!(regexNum.test(numeroDeTomasA))){
		alert("Tienes que poner un número en tomas de agua!");
		return false;
	}
	else {
		envioInfo(usuario, apellidoPat, apellidoMat, personas, numeroBaños, numeroDeRegaderas, numeroDeTomasA);
		}
	}
function envioInfo(usu, apP, apM, per, nB, nR, nTa){
	var arrayDatosUsuario = [email, usu, apP, apM, per, nB, nR, nTa, contraseña ,nomMedidor, direccion];
	var string = JSON.stringify(arrayDatosUsuario);
	var ajaxe = new XMLHttpRequest();
	ajaxe.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			alert(this.response);
			window.location.replace("http://localhost/PRUEBAOJO!!!!!/InicioRegistro/index.php");
		}
	}
	ajaxe.open("POST", "phpCreandoUsuario.php", true);
	ajaxe.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	ajaxe.send("dataUsuario=" + string);
	return;
}
function envioInicioSesion(){
	var datos=[2];
	datos[0] = document.getElementById("ingresoContra").value;
	datos[1] = document.getElementById("ingresoEmail").value;
	var string = JSON.stringify(datos);
	var ajaxe = new XMLHttpRequest();
	ajaxe.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200)
			alert(this.response);
	}
	ajaxe.open("POST", "phpiniciandousuario.php", true);
	ajaxe.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	ajaxe.send("sesion="+ string);
	return;
}
