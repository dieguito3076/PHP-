		var escalaUser = 0;
		var ajax = new XMLHttpRequest();
		ajax.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
					var escalaUser = this.response;
					escalaUser = parseInt(escalaUser);
					var elemento=document.getElementById('Escala1');
			    var lienzo=elemento.getContext('2d');
			    function Gradosrad(deg) {
			    return deg * Math.PI / 180};
			    function porgrad(por) {
			    por=por*1.8;
			    return por+180};
			    elemento.width=500;
			    elemento.height=220;
			    var po= escalaUser;
			    var porcent=0;
			    function Animacion() {
			        if (porcent < po){
			          lienzo.clearRect(100, 100, elemento.width, elemento.height);
			          lienzo.beginPath();
			          var j=porgrad(porcent);
			          var pru=Gradosrad(j);
			          var pru2=Gradosrad(180);
			          lienzo.arc(200, 200, 150,pru,pru2,true);
			          lienzo.lineWidth=45;
			          var gradiente = lienzo.createLinearGradient(100, 0, 350, 0);
			          gradiente.addColorStop(0, '#5ACBFF');
			          gradiente.addColorStop(.20, '#0EB2FF');
			          gradiente.addColorStop(.50, '#0B8FCC');
			          gradiente.addColorStop(.80, '#2D657F');
			          gradiente.addColorStop(1, '#07597F');
			          lienzo.strokeStyle=gradiente;
			          lienzo.stroke();
			           lienzo.closePath();
			           porcent=porcent+1;
			          if(porcent<=20)
			             lienzo.fillStyle = "#67D9CC";//#FF0000
			          if(porcent<=40&&porcent>20)
			             lienzo.fillStyle = "#41BAAD";//#E8350B
			          if(porcent<=60&&porcent>40)
			             lienzo.fillStyle = "#00D1BA";//#FF6100
			          if(porcent<=80&&porcent>60)
			             lienzo.fillStyle = "#009E8C";//#E8880B
			          if(porcent>80)
			             lienzo.fillStyle = "#005248";//#FFBE10"
			           lienzo.font = "bold 5em sans-serif";
			           lienzo.fillText(porcent+"%",110,200);
			        requestAnimationFrame(Animacion);//función recursiva
			      }
			    }
			    requestAnimationFrame(Animacion);
			}
		}
		ajax.open("GET", "PHPescala.php", true);
		ajax.send();
/* var elegot=document.getElementById('gotas');
    var lingot=elegot.getContext('2d');
    elegot.width=700;
    elegot.height=700;
    lingot.beginPath();
    var x=0;
    var x2=0;
    var y=0;
    var ima=0;
	var imagen = new Image();
	imagen.src = "gota.png";
	var imagen2 = new Image();
	imagen2.src = "gota.png";
	var start;
	var contador=0;

	function Animacion2(relojInterno) {
		if (!start)
			start = relojInterno;
		var progreso = relojInterno - start;
			if(contador %5==0){
			//lingot.clearRect(x, 0, elegot.width, elegot.height);//limpia pantalla
			ima++;
			if(ima<10){
			   lingot.beginPath();
			   lingot.drawImage(imagen,x2,128,89,128,0,0,100,200);
			   x2+=89;
			  lingot.closePath();
			 }
			if(ima<5){
			   lingot.beginPath();
				lingot.drawImage(imagen2,x,0,89,128,0,0,100,200);
				x+=89;
			  lingot.closePath();
			  }
			if(ima==10){
			  ima=0;
			  x=0;
			  x2=0;
			}
		  }
		contador++;
		requestAnimationFrame(Animacion2);
	}
	let laPromesa = new Promise((resolve, reject) => {
	  requestAnimationFrame(Animacion2);
	});
	laPromesa.then((r)=>{
		console.log(r)
	});
	laPromesa.catch((err)=> {
	 console.log("err.message");
	});
  lingot.closePath();
*/
