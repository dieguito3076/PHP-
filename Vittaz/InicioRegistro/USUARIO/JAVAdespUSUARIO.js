iDUsuario = 2; //ESTE NÚMERO SERÁ EL QUE NOS DÉ EL INICIO DE SESIÓN.
function getUser(){
      var idData = ["nombre", "apellidoPat", "apellidoMat", "email", "medidor", "direccion", "noBanos"]
      var ajaxD = new XMLHttpRequest();
      ajaxD.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            var recibodatos = this.response;
            var datosrec = recibodatos.split('|');
            for(var i = 0; i<7; i++){
                document.getElementById(idData[i]).innerHTML = datosrec[i];

            }
        }
      }
      ajaxD.open("POST", "phpObteniendoUsuario.php", true);
      ajaxD.setRequestHeader("Content-type","application/x-www-form-urlenconded");
      ajaxD.send("idUsu="+iDUsuario) ;
      return;
}
