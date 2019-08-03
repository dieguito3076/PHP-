<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
  	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
  	<script href = "js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="formularioCSS.css"/>
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <title>Formulario de Síntomas</title>
  </head>
  <body>
    <div class = "flexBox">
          <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" id = "drop" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Menú
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="enfermedades.html">Inicio</a>
              <a class="dropdown-item" href="medicamentos.html">Medicamentos</a>
              <a class="dropdown-item" href="#">Inteligencia Artificial</a>
            </div>
          </div>
          <h1 id = "main">Ingresando Síntomas</h1>
    </div>
    <div class="card mb-3" id = "mainCarro">
      <img class="card-img-top" src="Imagenes/diag.png" alt="Card image cap">
    </div>
    <p id = "instrucciones">A continuación seleccione los síntomas que presenta.</p>
    <div id = "cuestionario">
        <div class="flexBox">
                <div class="flexBox">
                  <div class = "alineacion">
                    <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('malestarGray.jpg', 'malestar.jpg', 0, 'sintom1');">
                      <img  src="fotossintomas/malestarGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom1" style="height:16em;"/>
                      <div class="card-img-overlay">
                        <p class="card-title" style="color:black;">Malestar General</p>
                      </div>
                    </div>
                  </div>
                  <div class = "alineacion">
                    <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('dolorcabezaGray.jpg', 'dolorcabeza.jpg', 1, 'sintom2');">
                      <img  src="fotossintomas/dolorcabezaGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom2" style="height:16em;"/>
                      <div class="card-img-overlay">
                       <p class="card-title" style="color: black;">Dolor de cabeza</p>
                     </div>
                    </div>
                  </div>
                </div>
                <div class="flexBox">
                   <div class = "alineacion">
                      <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('fiebreGray.jpg', 'fiebre.jpg', 2, 'sintom3');">
                        <img  src="fotossintomas/fiebreGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom3" style="height:16em;"/>
                        <div class="card-img-overlay">
                          <p class="card-title" style="color: black;">Fiebre</p>
                        </div>
                      </div>
                   </div>
                   <div class = "alineacion">
                     <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('dolmuscGray.jpg', 'dolmusc.jpg', 3, 'sintom4');">
                       <img  src="fotossintomas/dolmuscGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom4" style="height:16em;"/>
                       <div class="card-img-overlay">
                         <p class="card-title" style="color: black;">Dolores Musculares</p>
                       </div>
                     </div>
                   </div>
                   <div class = "alineacion">
                     <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('dolhomGray.png', 'dolhom.png', 4, 'sintom5');">
                       <img  src="fotossintomas/dolhomGray.png"  class="img-fluid" alt="Responsive image" id = "sintom5" style="height:16em;"/>
                       <div class="card-img-overlay">
                         <p class="card-title">Dolores de hombro</p>
                       </div>
                     </div>
                   </div>
                </div>
            </div>
        <div class="flexBox">
                <div class="flexBox">
                  <div class = "alineacion">
                    <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('presionPechoGray.jpg', 'presionPecho.jpg', 5, 'sintom6');">
                      <img  src="fotossintomas/presionPechoGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom6" style="height:16em;"/>
                      <div class="card-img-overlay">
                        <p class="card-title" style="color: black;">Presión en el pecho</p>
                      </div>
                    </div>
                  </div>
                  <div class = "alineacion">
                    <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('hinchazonTobillosGray.jpg', 'hinchazonTobillos.jpg', 6, 'sintom7');">
                      <img  src="fotossintomas/hinchazonTobillosGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom7" style="height:16em;"/>
                      <div class="card-img-overlay">
                       <p class="card-title" style="color:black;">Hinchazón en piernas, pies o tobillos</p>
                     </div>
                    </div>
                  </div>
                </div>
                <div class="flexBox">
                   <div class = "alineacion">
                      <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('dolorOjosGray.jpg', 'dolorOjos.jpg', 7, 'sintom8');">
                        <img  src="fotossintomas/dolorOjosGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom8" style="height:16em;"/>
                        <div class="card-img-overlay">
                          <p class="card-title" style="color:black;">Dolor detrás de ojos</p>
                        </div>
                      </div>
                   </div>
                   <div class = "alineacion">
                     <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('sensibilidadFacialGray.jpg', 'sensibilidadFacial.jpg', 8, 'sintom9');">
                       <img  src="fotossintomas/sensibilidadFacialGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom9" style="height:16em;"/>
                       <div class="card-img-overlay">
                         <p class="card-title" style="color:black;">Sensibilidad Facial</p>
                       </div>
                     </div>
                   </div>
                   <div class = "alineacion">
                     <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('dolorRetroesternalGray.jpg', 'dolorRetroesternal.jpg', 9, 'sintom10');">
                       <img  src="fotossintomas/dolorRetroesternalGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom10" style="height:16em;"/>
                       <div class="card-img-overlay">
                         <p class="card-title" style="color:black;">Dolor Retroesternal</p>
                       </div>
                     </div>
                   </div>
                </div>
            </div>
        <div class="flexBox">
                <div class="flexBox">
                  <div class = "alineacion">
                    <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('fatigaGray.jpg', 'fatigaC.jpg', 10, 'sintom11');">
                      <img  src="fotossintomas/fatigaGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom11" style="height:16em; width:20em;"/>
                      <div class="card-img-overlay">
                        <p class="card-title" style="color:black;">Fatiga</p>
                      </div>
                    </div>
                  </div>
                  <div class = "alineacion">
                    <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 11, 'sintom12');">
                      <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom12" style="height:16em;"/>
                      <div class="card-img-overlay">
                       <p class="card-title">Síntoma 12</p>
                     </div>
                    </div>
                  </div>
                </div>
                <div class="flexBox">
                   <div class = "alineacion">
                      <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 12, 'sintom13');">
                        <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom13" style="height:16em;"/>
                        <div class="card-img-overlay">
                          <p class="card-title">Síntoma 13</p>
                        </div>
                      </div>
                   </div>
                   <div class = "alineacion">
                     <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 13, 'sintom14');">
                       <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom14" style="height:16em;"/>
                       <div class="card-img-overlay">
                         <p class="card-title">Síntoma 14</p>
                       </div>
                     </div>
                   </div>
                   <div class = "alineacion">
                     <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 14, 'sintom15');">
                       <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom15" style="height:16em;"/>
                       <div class="card-img-overlay">
                         <p class="card-title">Síntoma 15</p>
                       </div>
                     </div>
                   </div>
                </div>
            </div>
        <br />
        <br />
        <div class="flexBox">
                <div class="flexBox">
                  <div class = "alineacion">
                    <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('tosGray.jpg', 'tos.jpg', 15, 'sintom16');">
                      <img  src="fotossintomas/tosGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom16" style="height:16em;"/>
                      <div class="card-img-overlay">
                        <p class="card-title" style="color:black;">Tos</p>
                      </div>
                    </div>
                  </div>
                  <div class = "alineacion">
                    <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('tosCronicaGray.jpg', 'tosCronica.jpg', 16, 'sintom17');">
                      <img  src="fotossintomas/tosCronicaGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom17" style="height:16em;"/>
                      <div class="card-img-overlay">
                         <p class="card-title" style="color:black;">Tos Crónica</p>
                     </div>
                    </div>
                  </div>
                </div>
                <div class="flexBox">
                   <div class = "alineacion">
                      <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('tosSecaGray.jpg', 'tosSeca.jpg', 17, 'sintom18');">
                        <img  src="fotossintomas/tosSecaGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom18" style="height:16em;"/>
                        <div class="card-img-overlay">
                          <p class="card-title">Tos Seca</p>
                        </div>
                      </div>
                   </div>
                   <div class = "alineacion">
                     <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('resequedadGargantaGray.jpg', 'resequedadGarganta.jpg', 18, 'sintom19');">
                       <img  src="fotossintomas/resequedadGargantaGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom19" style="height:16em;"/>
                       <div class="card-img-overlay">
                         <p class="card-title" style="color:black;">Resequedad de garganta</p>
                       </div>
                     </div>
                   </div>
                   <div class = "alineacion">
                     <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('dolorGargantaGray.jpg', 'dolorGarganta.jpg', 19, 'sintom20');">
                       <img  src="fotossintomas/dolorGargantaGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom20" style="height:16em;"/>
                       <div class="card-img-overlay">
                         <p class="card-title" style="color:black;">Dolor de Garganta</p>
                       </div>
                     </div>
                   </div>
                </div>
            </div>
        <div class="flexBox">
                <div class="flexBox">
                  <div class = "alineacion">
                    <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('dificultadRespirarGray.jpg', 'dificultadRespirar.jpg', 20, 'sintom21');">
                      <img  src="fotossintomas/dificultadRespirarGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom21" style="height:16em;"/>
                      <div class="card-img-overlay">
                        <p class="card-title" style="color:black;">Dificultad para respirar</p>
                      </div>
                    </div>
                  </div>
                  <div class = "alineacion">
                    <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('dolorToraxRespirarGray.jpg', 'dolorToraxRespirar.jpg', 21, 'sintom22');">
                      <img  src="fotossintomas/dolorToraxRespirarGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom22" style="height:16em;"/>
                      <div class="card-img-overlay">
                       <p class="card-title" style="color:black;">Dolor en tórax al inhalar</p>
                     </div>
                    </div>
                  </div>
                </div>
                <div class="flexBox">
                   <div class = "alineacion">
                      <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('respirarEjercicioGray.jpg', 'respirarEjercicio.jpg', 22, 'sintom23');">
                        <img  src="fotossintomas/respirarEjercicioGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom23" style="height:16em;"/>
                        <div class="card-img-overlay">
                          <p class="card-title" style="color:black;">Dificultad para respirar al hacer ejercicio</p>
                        </div>
                      </div>
                   </div>
                   <div class = "alineacion">
                     <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('ruidosRespiratoriosGray.jpg', 'ruidosRespiratorios.jpg', 23, 'sintom24');">
                       <img  src="fotossintomas/ruidosRespiratoriosGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom24" style="height:16em;"/>
                       <div class="card-img-overlay">
                         <p class="card-title" style="color:black;">Ruidos Respiratorios</p>
                       </div>
                     </div>
                   </div>
                   <div class = "alineacion">
                     <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 24, 'sintom25');">
                       <img  src="fotossintomas/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom25" style="height:16em;"/>
                       <div class="card-img-overlay">
                         <p class="card-title">Síntoma 25</p>
                       </div>
                     </div>
                   </div>
                </div>
            </div>
        <br />
        <br />
        <div class="flexBox">
                <div class="flexBox">
                  <div class = "alineacion">
                    <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 25, 'sintom26');">
                      <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom26"/>
                      <div class="card-img-overlay">
                        <p class="card-title">Síntoma 26</p>
                      </div>
                    </div>
                  </div>
                  <div class = "alineacion">
                    <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 26, 'sintom27');">
                      <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom27"/>
                      <div class="card-img-overlay">
                       <p class="card-title">Síntoma 27</p>
                     </div>
                    </div>
                  </div>
                </div>
                <div class="flexBox">
                   <div class = "alineacion">
                      <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 27, 'sintom28');">
                        <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom28"/>
                        <div class="card-img-overlay">
                          <p class="card-title">Síntoma 28</p>
                        </div>
                      </div>
                   </div>
                   <div class = "alineacion">
                     <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 28, 'sintom29');">
                       <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom29"/>
                       <div class="card-img-overlay">
                         <p class="card-title">Síntoma 29</p>
                       </div>
                     </div>
                   </div>
                   <div class = "alineacion">
                     <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 29, 'sintom30');">
                       <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom30"/>
                       <div class="card-img-overlay">
                         <p class="card-title">Síntoma 30</p>
                       </div>
                     </div>
                   </div>
                </div>
            </div>
        </div>
        <div class="flexBox">
            <div class="flexBox">
              <div class = "alineacion">
                <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 30, 'sintom31');">
                  <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom31"/>
                  <div class="card-img-overlay">
                    <p class="card-title">Dolores musculares</p>
                  </div>
                </div>
              </div>
              <div class = "alineacion">
                <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 31, 'sintom32');">
                  <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom32"/>
                  <div class="card-img-overlay">
                   <p class="card-title">Dolor de hombro</p>
                 </div>
                </div>
              </div>
            </div>
            <div class="flexBox">
               <div class = "alineacion">
                  <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 32, 'sintom33');">
                    <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom33"/>
                    <div class="card-img-overlay">
                      <p class="card-title">Malestar/presión en el pecho</p>
                    </div>
                  </div>
               </div>
               <div class = "alineacion">
                 <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 33, 'sintom34');">
                   <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom34"/>
                   <div class="card-img-overlay">
                     <p class="card-title">Malestar General</p>
                   </div>
                 </div>
               </div>
               <div class = "alineacion">
                 <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 34, 'sintom35');">
                   <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom35"/>
                   <div class="card-img-overlay">
                     <p class="card-title">Malestar General</p>
                   </div>
                 </div>
               </div>
            </div>
        </div>
        <div class="flexBox">
            <div class="flexBox">
              <div class = "alineacion">
                <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 35, 'sintom36');">
                  <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom36"/>
                  <div class="card-img-overlay">
                    <p class="card-title">Hinchazón en piernas, piesm o tobillos</p>
                  </div>
                </div>
              </div>
              <div class = "alineacion">
                <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 36, 'sintom37');">
                  <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom37"/>
                  <div class="card-img-overlay">
                   <p class="card-title">Dolor detrás de ojos</p>
                 </div>
                </div>
              </div>
            </div>
            <div class="flexBox">
               <div class = "alineacion">
                  <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 37, 'sintom38');">
                    <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom38"/>
                    <div class="card-img-overlay">
                      <p class="card-title">Sensibilidad facial</p>
                    </div>
                  </div>
               </div>
               <div class = "alineacion">
                 <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 38, 'sintom39');">
                   <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom39"/>
                   <div class="card-img-overlay">
                     <p class="card-title">Malestar General</p>
                   </div>
                 </div>
               </div>
               <div class = "alineacion">
                 <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 39, 'sintom40');">
                   <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom40"/>
                   <div class="card-img-overlay">
                     <p class="card-title">Malestar General</p>
                   </div>
                 </div>
               </div>
            </div>
        </div>
        <div class="flexBox">
            <div class="flexBox">
              <div class = "alineacion">
                <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 40, 'sintom41');">
                  <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom41"/>
                  <div class="card-img-overlay">
                    <p class="card-title">Dolor Retroesternal</p>
                  </div>
                </div>
              </div>
              <div class = "alineacion">
                <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 41, 'sintom42');">
                  <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom42"/>
                  <div class="card-img-overlay">
                   <p class="card-title">Fatiga</p>
                 </div>
                </div>
              </div>
            </div>
            <div class="flexBox">
               <div class = "alineacion">
                  <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 42, 'sintom43');">
                    <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom43"/>
                    <div class="card-img-overlay">
                      <p class="card-title">Síntoma 12</p>
                    </div>
                  </div>
               </div>
               <div class = "alineacion">
                 <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 43, 'sintom44');">
                   <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom44"/>
                   <div class="card-img-overlay">
                     <p class="card-title">Malestar General</p>
                   </div>
                 </div>
               </div>
               <div class = "alineacion">
                 <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 44, 'sintom45');">
                   <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom45"/>
                   <div class="card-img-overlay">
                     <p class="card-title">Malestar General</p>
                   </div>
                 </div>
               </div>
            </div>
        </div>
        <div class="flexBox">
            <div class="flexBox">
              <div class = "alineacion">
                <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 45, 'sintom46');">
                  <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom46"/>
                  <div class="card-img-overlay">
                    <p class="card-title">Síntoma 13</p>
                  </div>
                </div>
              </div>
              <div class = "alineacion">
                <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 46, 'sintom47');">
                  <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom47"/>
                  <div class="card-img-overlay">
                   <p class="card-title">Síntoma 14</p>
                 </div>
                </div>
              </div>
            </div>
            <div class="flexBox">
               <div class = "alineacion">
                  <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 47, 'sintom48');">
                    <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom48"/>
                    <div class="card-img-overlay">
                      <p class="card-title">Síntoma 15</p>
                    </div>
                  </div>
               </div>
               <div class = "alineacion">
                 <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 48, 'sintom49');">
                   <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom49"/>
                   <div class="card-img-overlay">
                     <p class="card-title">Malestar General</p>
                   </div>
                 </div>
               </div>
               <div class = "alineacion">
                 <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 49, 'sintom50');">
                   <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom50"/>
                   <div class="card-img-overlay">
                     <p class="card-title">Malestar General</p>
                   </div>
                 </div>
               </div>
            </div>
        </div>
        <br />
        <u><p id = "signosMain">Registrando Signos</p></u>
        <div class="flexBox">
            <div class="flexBox">
              <div class = "alineacion">
                <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 50, 'sintom51');">
                  <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom51"/>
                  <div class="card-img-overlay">
                    <p class="card-title">Signo 1</p>
                  </div>
                </div>
              </div>
              <div class = "alineacion">
                <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 51, 'sintom52');">
                  <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom52"/>
                  <div class="card-img-overlay">
                   <p class="card-title">Signo 2</p>
                 </div>
                </div>
              </div>
            </div>
            <div class="flexBox">
               <div class = "alineacion">
                  <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 52, 'sintom53');">
                    <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom53"/>
                    <div class="card-img-overlay">
                      <p class="card-title">Signo 3</p>
                    </div>
                  </div>
               </div>
               <div class = "alineacion">
                 <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 53, 'sintom54');">
                   <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom54"/>
                   <div class="card-img-overlay">
                     <p class="card-title">Signo 4</p>
                   </div>
                 </div>
               </div>
               <div class = "alineacion">
                 <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 54, 'sintom55');">
                   <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom55"/>
                   <div class="card-img-overlay">
                     <p class="card-title">Signo 5</p>
                   </div>
                 </div>
               </div>
            </div>
        </div>
        <div class="flexBox">
            <div class="flexBox">
              <div class = "alineacion">
                <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 55, 'sintom56');">
                  <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom56"/>
                  <div class="card-img-overlay">
                    <p class="card-title">Signo 6</p>
                  </div>
                </div>
              </div>
              <div class = "alineacion">
                <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 56, 'sintom57');">
                  <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom57"/>
                  <div class="card-img-overlay">
                   <p class="card-title">Signo 7</p>
                 </div>
                </div>
              </div>
            </div>
            <div class="flexBox">
               <div class = "alineacion">
                  <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 57, 'sintom58');">
                    <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom58"/>
                    <div class="card-img-overlay">
                      <p class="card-title">Signo 8</p>
                    </div>
                  </div>
               </div>
               <div class = "alineacion">
                 <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 58, 'sintom59');">
                   <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom59"/>
                   <div class="card-img-overlay">
                     <p class="card-title">Signo 9</p>
                   </div>
                 </div>
               </div>
               <div class = "alineacion">
                 <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 59, 'sintom60');">
                   <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom60"/>
                   <div class="card-img-overlay">
                     <p class="card-title">Signo 10</p>
                   </div>
                 </div>
               </div>
            </div>
        </div>
        <div class="flexBox">
            <div class="flexBox">
              <div class = "alineacion">
                <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 60, 'sintom61');">
                  <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom61"/>
                  <div class="card-img-overlay">
                    <p class="card-title">Signo 11</p>
                  </div>
                </div>
              </div>
              <div class = "alineacion">
                <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 61, 'sintom62');">
                  <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom62"/>
                  <div class="card-img-overlay">
                   <p class="card-title">Signo 12</p>
                 </div>
                </div>
              </div>
            </div>
            <div class="flexBox">
               <div class = "alineacion">
                  <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 62, 'sintom63');">
                    <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom63"/>
                    <div class="card-img-overlay">
                      <p class="card-title">Signo 13</p>
                    </div>
                  </div>
               </div>
               <div class = "alineacion">
                 <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 63, 'sintom64');">
                   <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom64"/>
                   <div class="card-img-overlay">
                     <p class="card-title">Signo 14</p>
                   </div>
                 </div>
               </div>
               <div class = "alineacion">
                 <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 64, 'sintom65');">
                   <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom65"/>
                   <div class="card-img-overlay">
                     <p class="card-title">Signo 15</p>
                   </div>
                 </div>
               </div>
            </div>
        </div>
        <div class="flexBox">
            <div class="flexBox">
              <div class = "alineacion">
                <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 65, 'sintom66');">
                  <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom66"/>
                  <div class="card-img-overlay">
                    <p class="card-title">Signo 16</p>
                  </div>
                </div>
              </div>
              <div class = "alineacion">
                <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 66, 'sintom67');">
                  <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom67"/>
                  <div class="card-img-overlay">
                   <p class="card-title">Signo 17</p>
                 </div>
                </div>
              </div>
            </div>
            <div class="flexBox">
               <div class = "alineacion">
                  <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 67, 'sintom68');">
                    <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom68"/>
                    <div class="card-img-overlay">
                      <p class="card-title">Signo 18</p>
                    </div>
                  </div>
               </div>
               <div class = "alineacion">
                 <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 68, 'sintom69');">
                   <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom69"/>
                   <div class="card-img-overlay">
                     <p class="card-title">Signo 19</p>
                   </div>
                 </div>
               </div>
               <div class = "alineacion">
                 <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 69, 'sintom70');">
                   <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom70"/>
                   <div class="card-img-overlay">
                     <p class="card-title">Signo 20</p>
                   </div>
                 </div>
               </div>
            </div>
        </div>
        <div class="flexBox">
            <div class="flexBox">
              <div class = "alineacion">
                <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 70, 'sintom71');">
                  <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom71"/>
                  <div class="card-img-overlay">
                    <p class="card-title">Signo 21</p>
                  </div>
                </div>
              </div>
              <div class = "alineacion">
                <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 71, 'sintom72');">
                  <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom72"/>
                  <div class="card-img-overlay">
                   <p class="card-title">Signo 22</p>
                 </div>
                </div>
              </div>
            </div>
            <div class="flexBox">
               <div class = "alineacion">
                  <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 72, 'sintom73');">
                    <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom73"/>
                    <div class="card-img-overlay">
                      <p class="card-title">Signo 23</p>
                    </div>
                  </div>
               </div>
               <div class = "alineacion">
                 <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 73, 'sintom74');">
                   <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom74"/>
                   <div class="card-img-overlay">
                     <p class="card-title">Signo 24</p>
                   </div>
                 </div>
               </div>
               <div class = "alineacion">
                 <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 74, 'sintom75');">
                   <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom75"/>
                   <div class="card-img-overlay">
                     <p class="card-title">Signo 25</p>
                   </div>
                 </div>
               </div>
            </div>
        </div>
        <div class="flexBox">
            <div class="flexBox">
              <div class = "alineacion">
                <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 75, 'sintom76');">
                  <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom76"/>
                  <div class="card-img-overlay">
                    <p class="card-title">Signo 26</p>
                  </div>
                </div>
              </div>
              <div class = "alineacion">
                <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 76, 'sintom77');">
                  <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom77"/>
                  <div class="card-img-overlay">
                   <p class="card-title">Signo 27</p>
                 </div>
                </div>
              </div>
            </div>
            <div class="flexBox">
               <div class = "alineacion">
                  <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 77, 'sintom78');">
                    <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom78"/>
                    <div class="card-img-overlay">
                      <p class="card-title">Signo 28</p>
                    </div>
                  </div>
               </div>
               <div class = "alineacion">
                 <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 78, 'sintom79');">
                   <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom79"/>
                   <div class="card-img-overlay">
                     <p class="card-title">Signo 29</p>
                   </div>
                 </div>
               </div>
               <div class = "alineacion">
                 <div class="card bg-dark text-white col" id = "anexo" onclick="escogerOpcion('pulmonGray.jpg', 'pulmon.jpg', 79, 'sintom80');">
                   <img  src="Imagenes/pulmonGray.jpg"  class="img-fluid" alt="Responsive image" id = "sintom80"/>
                   <div class="card-img-overlay">
                     <p class="card-title">Signo 30</p>
                   </div>
                 </div>
               </div>
            </div>
        </div>
    </div>
    <div class="jumbotron">
        <h1 class="display-4">Enviar resultados</h1>
        <p class="lead">A coontinuación se enviarán tus resultados para poder determinar la enfermedad que puedes llegar a tener.</p>
        <hr class="my-4">
        <p>Es importante mencionar que con base a tu edad, peso y altura, se te mostrará una lista de medicamentos con porciones para poder remediar con la enfermedad o infección que puedes estar portando.</p>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" id = "enviar">
          Enviar respuestas
        </button>
    </div>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">¿Estás seguro que has ingresado todos tus síntomas?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Al ingresar todos los síntomas que presentas, nos facilitas poder hacer un diagnótico con mayor precisión.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Regresar</button>
            <button type="button" class="btn btn-primary" onclick="corroborar();">Continuar</button>
          </div>
        </div>
      </div>
    </div>
    <script src = "javaFormularioF.js"></script>
  </body>
</html>
