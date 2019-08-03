<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="graficandoFINAL.css"/>
    <!--link: https://www.highcharts.com/demo/column-placement-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nixie+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bevan" rel="stylesheet">
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <title></title>
  </head>
  <body>
    <div class="flexBox" id = "headerM">
      <a  class="btn btn-primary" id="boton" onclick="solicitarEdad();" style="color: #fff;">Comenzar</a>
      <p id = "tituloMonitoreo">Monitoreo de tus signos vitales</p>
    </div>
    <div class="flexBox" id = "flexGraph">
        <div id="pulso"></div>
        <div id="temperatura" style="height: 400px; min-width: 380px"></div>
    </div>
    <div id="respiraciones" style="min-width: 310px; height: 400px;"></div>
    <button type="button" class="btn btn-primary btn-sm" style="font-size: 1em;" onclick="mostrarPagina();">Finalizar diagnóstico</button>
    <br />
    <br />
    <div id = "seccionDiagnostico">
      <p id = "diagnosticoFinal">Diagnostico Final</p>
      <div class="flexBox" id = "imagenesDos">
        <img src="Imagenes/faringitis.jpg" id="imgDiagnos"class="img-fluid" alt="Responsive image">
        <img src="Imagenes/faringe.jpg" id="imgPropia" class="img-fluid" alt="Responsive image">
      </div>
      <div class="alert alert-danger" id = "anuncio"role="alert">
        A priori, se ha identificado Faringitis.
      </div>
      <p id = "descripcion">Inflamación de la faringe que puede provocar dolor de garganta, sequedad, enrojecimiento de la mucosa y, en ocasiones, fiebre.</p>
      <div class="flexBox">
            <img src="FotosMedicamentos/pills1.jpg"  class="img-fluid imagenMedi" id = "img1" alt="Responsive image">
            <div class="card bg-light mb-3 cardInfo" style="max-width: 50rem;">
              <div class="card-header">Medicamento 1</div>
              <div class="card-body">
                <h5 class="card-title">Nombre del Medicamento</h5>
                <p class="card-text" id = "medDes1">Aquí se desplegará una descripción del medicamento indicado. Misma que será extraida de la base de datos. Cada medicamento tiene su foto, nombre y su descripción.</p>
              </div>
            </div>
      </div>
      <div class="flexBox">
            <img src="FotosMedicamentos/pills1.jpg"  class="img-fluid imagenMedi" id = "img2" alt="Responsive image">
            <div class="card bg-light mb-3 cardInfo" style="max-width: 50rem;">
              <div class="card-header">Medicamento 2</div>
              <div class="card-body">
                <h5 class="card-title">Nombre del Medicamento</h5>
                <p class="card-text" id = "medDes2">Aquí se desplegará una descripción del medicamento indicado. Misma que será extraida de la base de datos. Cada medicamento tiene su foto, nombre y su descripción.</p>
              </div>
            </div>
      </div>
      <div class="flexBox">
            <img src="FotosMedicamentos/pills1.jpg"  class="img-fluid imagenMedi" id = "img3" alt="Responsive image">
            <div class="card bg-light mb-3 cardInfo" style="max-width: 50rem;">
              <div class="card-header">Medicamento 3</div>
              <div class="card-body">
                <h5 class="card-title">Nombre del Medicamento</h5>
                <p class="card-text" id = "medDes3">Aquí se desplegará una descripción del medicamento indicado. Misma que será extraida de la base de datos. Cada medicamento tiene su foto, nombre y su descripción.</p>
              </div>
            </div>
      </div>
      <div class="flexBox">
            <img src="FotosMedicamentos/pills1.jpg"  class="img-fluid imagenMedi" id = "img4" alt="Responsive image">
            <div class="card bg-light mb-3 cardInfo" style="max-width: 50rem;">
              <div class="card-header">Medicamento 4</div>
              <div class="card-body">
                <h5 class="card-title">Nombre del Medicamento</h5>
                <p class="card-text" id = "medDes4">Aquí se desplegará una descripción del medicamento indicado. Misma que será extraida de la base de datos. Cada medicamento tiene su foto, nombre y su descripción.</p>
              </div>
            </div>
      </div>
    </div>
    <script src="auxiliarJavaGrafFinal.js"></script>
  </body>
</html>
