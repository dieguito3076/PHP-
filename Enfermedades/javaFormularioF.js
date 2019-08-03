var sintomas = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]; //Tiene que tener el mismo orden de las entradas de las redes neuronales.
function escogerOpcion(imgGray, imgCol, posCadena, id){
  var img = document.getElementById(id);
  cadena = img.src;
  var res = cadena.split("/");
  if(res[res.length-1] == imgGray){
      final = "fotosSintomas/"+imgCol;
      img.setAttribute("src", final);
      sintomas[posCadena] = 1;
  }
  else if(res[res.length-1] == imgCol){
      final = "fotosSintomas/"+imgGray;
      img.setAttribute("src", final);
      sintomas[posCadena] = 0;
  }
  console.log(sintomas);
  return sintomas;
}
function corroborar(){
  var string = JSON.stringify(sintomas);
  var final = string.split(',').join('');
  var ajaxe = new XMLHttpRequest();
  ajaxe.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      console.log(this.response);
    }
  }
  ajaxe.open("POST", "enviandoCadena.php", true);
  ajaxe.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  ajaxe.send("cadena=" + final);
  cambiarPagina("diagnosticoFinal.php", "Diagnostico Final");
  return;
}
function cambiarPagina(url, nombreVentana){
  window.open(url, nombreVentana);
}
