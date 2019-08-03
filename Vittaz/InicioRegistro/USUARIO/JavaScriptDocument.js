var arregloMainOpciones = ["#tercerBloque", "#segundoBloque", "#primerBloque"];
var opcionesPrincipales = ['.ActividadAgua', '.datosUsuario', '.HuellaHidrica', '.inicio', '.Escala'];
var arregloApartadoActividad = ['#actividad', '#detectarFugas', '.datosUsuario', '.HuellaHidrica', '.inicio', '#proyecciones'];
var opcionesRecoHuella = ["#contenido1","#contenido2","#contenido3", ".inicio", "#infoHuellaHidrica"];
function mostrar(frame){
  for(var i = 0; i<arregloMainOpciones.length;i++)
      $(arregloMainOpciones[i]).css("display", "none");
  $(frame).css("display", "block");
  return;
}
function botonActividad(frame){
  for(var i = 0; i<arregloApartadoActividad.length;i++)
      $(arregloApartadoActividad[i]).css("display", "none");
  $(frame).css("display", "block");
  return;
}

function mostrarOpcionMadre(frame){
  for(var i = 0; i<opcionesPrincipales.length;i++)
      $(opcionesPrincipales[i]).css("display", "none");
  $(frame).css("display", "block");
  return;
}
function primerBotonActividad(){
  $("#infoActividad").css("display", "none");
  $("#actividad").css("display", "block");
  ajaxActividad();
  return;
}
function anteriorInfoActividad(){
  $("#infoActividad").css("display", "block");
  $("#actividad").css("display", "none");
  return;
}
function botonFuga(){
  $('#infoActividad').css("display", "none");
  $('#proyecciones').css("display", "none");
  $('#detectarFugas').css("display", "block");
  return;
}
function botonProyecciones(){
  $('#infoActividad').css("display", "none");
  $('#detectarFugas').css("display", "none");
  $('#proyecciones').css("display", "block");
  ajaxInfoEstadistica();
  return;
}
function mostrarConteHReco(frame){
  for(var i = 0; i<opcionesRecoHuella.length;i++)
      $(opcionesRecoHuella[i]).css("display", "none");
  $(frame).css("display", "block");
  return;
}

//Esta va a ser la que mande a llamar información del AJAX PHP -> Database.
//FUNCIONES QUE CONECTAN CON DATABASE PHP:
function validarNumero(){
  var hora = document.getElementById('horasDESCANSO').value;
  var horRex = new RegExp("^[0-9]{1,2}$");
  if(horRex.test(hora)){
    hora = parseInt(hora);
     if(hora > 24)
            alert("Las horas deben de ser menores a 25!");
     else
            return hora;
  }
  else
    alert("Las horas tienen que ser menores a 25 y tienen que ser números!");
}
function graficarFuga(numeros, etiquetas){
  var horas = validarNumero();
  var horasEscogidas = [];
  var etiquetasHoras = [];
  var promedio = 0;
  for(var i = numeros.length - horas; i<numeros.length; i++){
      horasEscogidas.push(numeros[i]);
      etiquetasHoras.push(etiquetas[i]);
  }
  console.log(horasEscogidas);
  var elementos4 = ["ActividadFuga", "line",
  			  [etiquetasHoras, "Huella Hídrica","Gasto de agua según el rango que ingresaste"],
  			  horasEscogidas,[150, 150, 0, 0]
  			];
  creandoGrafico(elementos4, '#E8555D','#718CFF');
  for(var i = 0; i< horasEscogidas.length; i++)
      promedio = promedio + horasEscogidas[i];
  promedio = promedio/horasEscogidas.length;
  promedio = promedio.toFixed(2);
  alert("El promedio de litros consumidos es de: " +promedio+" L/H");
  document.getElementById("promedioFuga").innerHTML = "El promedio de litros consumidos es de: " +promedio+" L/H";
  return;
}
function ajaxFuga(){
    var data = [];
    var horas;
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function(){
      if(this.readyState == 4 && this.status == 200){
          var recibo = this.response;
          var json1 = recibo.split('&');
          var jsonFechas = JSON.parse(json1[0]);
          var jsonNum = JSON.parse(json1[1]);
          for(var i = 0; i<jsonNum.length; i++){
                  jsonNum[i] = parseFloat(jsonNum[i]);
                  jsonFechas[i] = jsonFechas[i].substring(11,19);
          }
          graficarFuga(jsonNum, jsonFechas);
      }
    }
    ajax.open("GET", "phpFUGA.php?horasD="+horas, true);
    ajax.send();
    return;
}
function ajaxActividad(){
    var numMatriz = [];
    var fechasMatriz = [];
    var horas;
    var promedio = 0;
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function(){
      if(this.readyState == 4 && this.status == 200){
          var recibo = this.response;
          var json1 = recibo.split('&');
          var jsonFechas = JSON.parse(json1[0]);
          var jsonNum = JSON.parse(json1[1]);
          for(var i = 0; i<12; i++){
                  numMatriz[i] = parseFloat(jsonNum[i+12]);
                  fechasMatriz[i] = jsonFechas[i+12];
                  fechasMatriz[i] = fechasMatriz[i].substring(11,19);
          }
          var elementos3 = ["actividadAgua", "line",
          			  [fechasMatriz, "Huella Hídrica","Tu Huella Hídrica en las últimas semanas"],
          			  numMatriz,[90, 90, 0, 0]
          			];
        creandoGrafico(elementos3, '#05738E','#88C9DB');
        for(var i = 0; i< numMatriz.length; i++)
              promedio = promedio + numMatriz[i];
        promedio = promedio/numMatriz.length;
        promedio = promedio.toFixed(2);
        alert("El promedio de litros consumidos es de: " +promedio+" L/H");
        document.getElementById("promedioAgua12H").innerHTML = "El promedio de litros consumidos es de: " +promedio+" L/H";
      }
    }
    ajax.open("GET", "phpFUGA.php?horasD="+horas, true);
    ajax.send();
    return;
}
function ajaxGastoDia(){
  var matrizLec = [];
  var matrizDia = [];
  var promedioGastos = 0;
  var index = 0;
  var ajax3 = new XMLHttpRequest();
  ajax3.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
        var recibo = this.response;
        var json3 = recibo.split('&');
        var matrizDiaDATA = JSON.parse(json3[0]);
        var matrizLecDATA = JSON.parse(json3[1]);
        if(matrizLecDATA<5)
              var cont = 0;
        else
              var cont = matrizLecDATA.length - 5;
        for( var i = cont; i<matrizLecDATA.length; i++){
                matrizLec[index] = parseFloat(matrizLecDATA[i]);
                matrizDia[index] = matrizDiaDATA[i];
                index = index +1;
        }
      for(var i = 0; i< matrizLec.length; i++)
            promedioGastos = promedioGastos + matrizLec[i];
      promedioGastos = promedioGastos/matrizLec.length;
      promedioGastos = promedioGastos.toFixed(2);
      var elementos1 = ["actividadAguaHuellaHidrica", "bar",
      			  [matrizDia, "Huella Hídrica","Tu Gasto Hídrico en los útlimos días"],
      			  matrizLec,[90, 90, 0, 0]
      			];
      creandoGrafico(elementos1, '#1F1E33', '#1F1E33');
      document.getElementById("promedio").innerHTML = "El promedio de tu Gasto es de: " +promedioGastos+" L/Día";
      document.getElementById("MostrandoTUgastoFUTURO").innerHTML = promedioGastos;
      }
   }
    ajax3.open("POST", "graficaGasto.php", true);
    ajax3.setRequestHeader("Content-type","application/x-www-form-urlenconded");
    ajax3.send("idUsu="+iDUsuario);
    return;
}
function ajaxInfoEstadistica(){
  var gasto = [];
  var promedio = 0;
  var ajax3 = new XMLHttpRequest();
  ajax3.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
        var recibo = this.response;
        var recibo = JSON.parse(recibo);
        var actividad = recibo[0];
        for(var i = 1; i<recibo.length-2; i++)
          gasto[i-1] = recibo[i];
        var estadoFuga = recibo[recibo.length-1];
        var escala = parseFloat(recibo[recibo.length -2]);
        if(estadoFuga == 1){
            document.getElementById("estado").innerHTML = "ACTIVO, te recomendamos checar tus tuberías! Probablemente haya una fuga.";
        }
        else{
            document.getElementById("estado").innerHTML = "INACTIVO, no se han registrado fugas en tu casa!";
        }
        for(var i = 0; i<gasto.length;i++)
            promedio = promedio + parseFloat(gasto[i]);
        promedio = promedio.toFixed(2);
        document.getElementById("gastoTotal").innerHTML = promedio+"Litros gastados";
        actividad = actividad.split('.');
        for(var i = 0; i<actividad.length;i++)
          actividad[i] = parseFloat(actividad[i]);
        var etiquetas = ["Cocina","Regadera","Baño","Lavadora","Jardín","Extra"];
        var elementosGraph = ["actividadDentroDeLaCasa", "bar",
        			  [etiquetas, "Gasto en litros","Tu gasto dentro de tu casa"],
        			  actividad,[90, 90, 20, 20]
        			];
        var etiquetasEscala = ["Primer día","Segundo día","Tercer día","Cuarto día","Quinto día","Sexto día","Séptimo día"];
        var crecimientoEscValores = [escala + 1, escala + 2, escala +3, escala + 5, escala + 7, escala +12, escala + 28];
        var elementosEscala = ["crecimientoEscala",
                "line",
        			  [etiquetasEscala, "Ahorrando el 2% de tu consumo diario tu escala será de","Crecimiento de tu Escala al ahorrar el 2% de tu consumo total por día."],
        			  crecimientoEscValores,
                [90, 90, 50, 50]
        ];
        var elementosPuntos = ["escalaConPuntos",
                "doughnut",
        			  [etiquetasEscala, "Ahorrando el 2% de tu consumo diario tu escala será de","Crecimiento de tu Escala al ahorrar el 2% de tu consumo total por día."],
        			  crecimientoEscValores,
                [400, 400, 0, 0]
        ];
        var coloresMat = ["#113f56", "#4f8ba7","#b0b9c2","#96aabb","#93b0c0", "#93bac0"];
        //creandoGrafico(elementosPuntos, coloresMat, '#FFF');
        creandoGrafico(elementosEscala, '#1F1E33', '#4f8ba7');
        creandoGrafico(elementosGraph, coloresMat, '#4f8ba7');
      }
   }
  ajax3.open("POST", "actividad.php", true);
  ajax3.setRequestHeader("Content-type","application/x-www-form-urlenconded");
  ajax3.send("idUsu="+iDUsuario);
  return;
}
 //aqui terminan las funciones que conectan DATABASE
var jsonNum, jsonFechas, etiquetasHoras, horasEscogidas, matrizLec, matrizDia;
var elementos1 = ["actividadAguaHuellaHidrica", "bar",
			  [matrizDia, "Huella Hídrica","Tu gasto hídrico el los últimos días"],
			  matrizLec,[90, 90, 0, 0]
			];
var elementos3 = ["actividadAgua", "line",
			  [jsonFechas, "Huella Hídrica","Tu Gasto Hídrico en las últimas doce horas"],
			  jsonNum,[90, 90, 0, 0]
];
var elementos4 = ["ActividadFuga", "line",
        [etiquetasHoras, "Gasto Hídrico","Gasto de agua en las últimas horas según el rango que ingresaste"],
        horasEscogidas,[150, 150, 0, 0]
];
creandoGrafico(elementos1, '#1F1E33', '#1F1E33');
creandoGrafico(elementos3, '#78C8FF','#FF1ADC');
creandoGrafico(elementos4, '#E8555D','#718CFF');

function creandoGrafico(elementos, colores, border){
      				new Chart(document.getElementById(elementos[0]), {
      			      	type: elementos[1],
      			      	data: {
      			        	labels: elementos[2][0],
      			        	datasets: [
      			          	{
      			            	label: elementos[2][1],
      			            	backgroundColor: colores,
      			            	borderColor: border,
      			            	data: elementos[3]
      			          	}
      			        	]
      			      	},
      			      	options: {
      			        legend: { display: false },
      			        title: {
      			          	display: true,
      			          	text: elementos[2][2]
      			        },
      					layout: {
      							padding: {
      								left: elementos[4][0],
      								right: elementos[4][1],
      								top: elementos[4][2],
      								bottom: elementos[4][3]
      									}
      							}
      			      	}
      			    });
      			    return;
      			}
function graficaContraste(){
      var matrizLec = [];
      var matrizDia = [];
      var index = 0;
      var ajax3 = new XMLHttpRequest();
      ajax3.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            var recibo = this.response;
            var json3 = recibo.split('&');
            var matrizDiaDATA = JSON.parse(json3[0]);
            var matrizLecDATA = JSON.parse(json3[1]);
            if(matrizLecDATA<5)
                  var cont = 0;
            else
                  var cont = matrizLecDATA.length - 5;
            for( var i = cont; i<matrizLecDATA.length; i++){
                    matrizLec[index] = parseFloat(matrizLecDATA[i]);
                    matrizDia[index] = matrizDiaDATA[i];
                    index = index +1;
            }
            id6 = "ContrasteHuella"
            //labelsX debe de tener las cinco últimas fechas de los gastos por semana.
            labelsX = matrizDia;
            labelArea = ["", "", "Tu Gasto", "Gasto Ideal"];
            titulo6 = "Meta para la próxima semana, reducir en un 10% tu gasto hídrico.";
            position6 = [90,90,0,0];
            dataDerecha = matrizLec;
            var dataIzquierda = [];
            dataIzquierda = [matrizLec[0]-(matrizLec[0] * 0.10), matrizLec[1]-(matrizLec[1] * 0.10), matrizLec[2]-(matrizLec[2] * 0.10), matrizLec[3]-(matrizLec[3] * 0.10), matrizLec[4]-(matrizLec[4] * 0.10)];
            colores = [ "#8e5ea2", "#3e75cd", "rgba(0,0,0,0.2)", "rgba(0,0,0,0.2)"];
            graficoBarrasRelacional(id6, labelsX, labelArea, dataIzquierda, dataDerecha, titulo6, position6, colores);
          }
       }
      ajax3.open("POST", "graficaGasto.php", true);
      ajax3.setRequestHeader("Content-type","application/x-www-form-urlenconded");
      ajax3.send("idUsu="+iDUsuario);
      return;
}
function graficoBarrasRelacional(id, labelsEnX, labelsArea, dataIzq, dataDer, titulo, position,color){
	new Chart(document.getElementById(id), {
        type: 'bar',
        data: {
        labels: labelsEnX,
        datasets: [{
            							label: labelsArea[0],
            							type: "line",
            							borderColor: color[0],
            							data: dataIzq,
            							fill: false
            						}, {
            							label: labelsArea[1],
            							type: "line",
            							borderColor: color[1],
            							data: dataDer,
            							fill: false
            						}, {
            							label: labelsArea[2],
            							type: "bar",
            							backgroundColor: color[2],
            							data: dataIzq,
            						}, {
            							label: labelsArea[3],
            							type: "bar",
            							backgroundColor: color[3],
            							backgroundColorHover: "#3e95cd",
            							data: dataDer
            						}
            					]
            				},
            				options: {
            					title: {
            						display: true,
            						text: titulo
            					},
            					legend: { display: false },
            					layout: {
            						padding: {
            							left: position[0],
            							right: position[1],
            							top: position[2],
            							bottom: position[3]
            								}
            						}
            				}
            				});
            }
//TRANSITANDO IMÁGENES
function cambiandoImg(imagen, imagen2){
  var img = document.getElementById("imagenTrans");
  var img2 = document.getElementById("imagenTrans1");
  img.setAttribute("src", imagen);
  img2.setAttribute("src", imagen2);
  return;
}
