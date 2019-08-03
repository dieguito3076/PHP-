<?php
	session_start();
	include 'recomendaciones.php';
  $nombre = $_SESSION['usuario'];
	$promedioDia = $_SESSION['promedioDiaUsuario'];
?>
<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset="UTF-8">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Limelight" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Vast+Shadow" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Sunflower:300" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fjalla+One|Old+Standard+TT" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kalam" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kalam|Neucha" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Allerta" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Old+Standard+TT" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Prata" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Ultra" rel="stylesheet">
	<title>PerfilUsuario</title>
	<link rel="stylesheet" type="text/css" href="CSSusuarioPagina.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script href = "js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</head>
<body>
	<div class = "contenedor-form">
		<div  class = "formulario">
			 <nav class="navbar navbar-dark bg-dark" id = "navBarDark">
				 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
	          <span class="navbar-toggler-icon"></span>
         </button>
				 	<h2 class="navbar-brand" id = "NombreUsuario" onclick="mostrarOpcionMadre('.inicio');"><?php echo $nombre;?></h2>
				  <div class="collapse navbar-collapse" id="navbarText">
						<ul id = "contOp">
							<li id = "Datos" class="main" onclick="mostrarOpcionMadre('.inicio'); getUser(); cambiandoImg('desperGray.jpg', 'desperGray.jpg');">Inicio</li>
							<li id = "Datos" class="main" onclick="mostrarOpcionMadre('.datosUsuario'); getUser(); cambiandoImg('aguaGray.jpg', 'aguaGray.jpg');">Datos Personales</li>
							<li id = "Huella" class="main" onclick="mostrarOpcionMadre('.HuellaHidrica'); cambiandoImg('aguaGray.jpg', 'aguaGray.jpg');">Gasto Hídrico</li>
							<li id = "Escala" class="main" onclick="mostrarOpcionMadre('.Escala'); cambiandoImg('desper.jpg', 'desper.jpg');">Mi Escala</li>
							<li id = "Actividad" class="main" onclick="mostrarOpcionMadre('.ActividadAgua'); cambiandoImg('desper.jpg', 'desper.jpg');">Actividad en mi casa</li>
							<li id = "Carrito" class="main" onclick="carrito(); cambiandoImg('aguaGray.jpg', 'aguaGray.jpg');">Tienda</li>
						</ul>
					</div>
			 </nav>
			 <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img class="d-block w-100" src="desperGray.jpg" alt="First slide" id = "imagenTrans">
							<div class="card-img-overlay">
								<h1 id ="vittaz">VITTAZ</h1>
			 				</div>
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100" src="desperGray.jpg" alt="Second slide" id = "imagenTrans1">
							<div class="card-img-overlay">
								<h1 id ="vittaz">VITTAZ</h1>
			 				</div>
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
		</div>
		<div class = "opciones">
				<div  class = "ActividadAgua">
						<div id = "infoActividad">
										<div class="jumbotron">
														<h1 class="display-4" style="color: black">Actividad Hídrica</h1>
														<p class="lead"style="color: black; font-family: 'Slabo 27px', serif;">Tu Actividad Hídrica es el monitoreo de los litros que has gastado en las últimas doce horas. Con base en ello, nosotros podemos conocer tu Gasto Hídrico.</p>
														<hr class="my-4">
														<p style="color: black; font-family: 'Slabo 27px', serif;">En este apartado podrás monitorear la cantidad de litros que se están gastando en tu casa. Te ayudará para conocer tu consumo diario. Por otra parte podrás detectar presencia de fugas en el apartado de "Detectando Fugas".</p>
														<a class="btn btn-primary btn-lg" onclick="primerBotonActividad();" role="button" style="color: #fff;">Consultar mi Actividad Hídrica</a>
										</div>
										<div id="flexInfoActividad">
															<div class="carrouPicActividadFlex carrouPrimero carrouPicActividad" style="position: relative; left: 0;">
																	<div id="conte1" >
																					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
																						  <ol class="carousel-indicators">
																						    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
																						    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
																						    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
																						  </ol>
																						  <div class="carousel-inner">
																						    <div class="carousel-item active">
																						      <img class="d-block w-100" src="desperGray.jpg" alt="First slide">
																						    </div>
																						    <div class="carousel-item">
																						      <img class="d-block w-100" src="desper.jpg" alt="Second slide">
																						    </div>
																						    <div class="carousel-item">
																						      <img class="d-block w-100" src="desperGray.jpg" alt="Third slide">
																						    </div>
																						  </div>
																						  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
																						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
																						    <span class="sr-only">Previous</span>
																						  </a>
																						  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
																						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
																						    <span class="sr-only">Next</span>
																						  </a>
																					</div>
																					<div class="jumbotron jumbotron-fluid">
																					  <div class="container">
																					    <h1 class="display-4">Detectando Fugas</h1>
																					    <p class="lead" style="text-align: justify; font-family: 'Slabo 27px', serif; padding: 1em;">Para detectar fugas es necesario dejar de usar agua al menos por cinco horas, para ello ingresarás el intervalo de horas en el que has estado inactivo y el sistema te desplegará la actividad en el intervalo. Contamos con algoritmos que detectarán la fuga y en caso de encontrarla, se te dará aviso.</p>
																							<a style="color:#fff; font-size:1.5em; position: relative; left: 1em;" onclick="botonFuga();" class="btn btn-primary">Detectar fuga</a>
																					  </div>
																					</div>
																		</div>
															</div>
															<div class="carrouPicActividadFlex carrouPicActividad">
																	<div id="conte2">
																					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
																						  <div class="carousel-inner">
																						    <div class="carousel-item active">
																						      <img class="d-block w-100" src="chart.jpg" height="390"alt="First slide">
																						    </div>
																					</div>
																					<div class="jumbotron jumbotron-fluid">
																					  <div class="container">
																					    <h1 class="display-4">Proyecciones</h1>
																					    <p class="lead" style="text-align: justify; font-family: 'Slabo 27px', serif; padding: 1em;">En este apartado podrás ver un estimado de tu Gasto para un mes, con base en tu Gasto. Habrán distintas proyecciones que se basarán en cuanto puedes reducir tu consumo para ayudar al medio ambiente y recibir más puntos!</p>
																							<a style="color:#fff; font-size:1.5em; position: relative; left: 1em;" onclick="botonProyecciones();" class="btn btn-primary">Consultar mis proyecciones</a>
																					  </div>
																					</div>
																		</div>
															</div>
													</div>
										</div>
										<div class="alert alert-success" role="alert">
											  <h4 class="alert-heading">Detectando Fugas</h4>
											  <p>	De ser registrada una fuga se te notificará cada tres días vía e-mail. El sistema automáticamente tee estará monitoreando para identificar si la fuga fue reparada o sigue, de ser reparada, tu escala de concientización subirá; ello te permitirá recibir más puntos de bonificación.</p>
											  <hr>
										</div>
						</div>
						<div id = "actividad">
								<p  id = "fugaBoton" onclick="botonActividad('#infoActividad');">Regresar</p>
								<h1 id = "headActividad" onclick="anteriorInfoActividad();">Actividad del agua en tu casa</h1>
								<p id = "instrucciones">En este apartado podrás ver la actividad del consumo de agua en las
								últimas doce horas. Se graficará el flujo y te desplegará el promedio de litros consumidos en
				  			esas doce horas.</p>
								<div class = "grafica">
										<canvas id = "actividadAgua"></canvas>
										<div id="explicacionPromedio">
													<h2 id = "promedioAgua12H"></h2>
													<p  style=" cursor: pointer; position: relative; font-size:1.8em; text-align: center;left: 15em;background: none; color: black;" data-toggle="modal" data-target="#exampleModal">
													  ¿Qué significa esto?
													</p>
										</div>
								</div>
								<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalLabel">Qué significa tu Actividad Hídrica?</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
								        Aqui es donde con base en tu promedio, un programa de JavaScript te dirá que significa tu gasto.
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								      </div>
								    </div>
								  </div>
								</div>
						</div>
						<div id ="detectarFugas">
				 				<p  id = "fugaBoton" onclick="botonActividad('#infoActividad');">Regresar</p>
				 				<h1>Detectando Fugas</h1>
				 				<div class = "graficando">
	 									<p id = "instrucciones">Para poder detectar fugas en tu casa, ingresa el número de horas que has estado sin usar agua.
	 									La aplicación buscará los registros hechos en ese intervalo de tiempo y te los graficará.</p>
	 									<input type = "text" id = "horasDESCANSO" placeholder = "Ingresar horas">
	 									<input type = "submit" style="font-family: 'Kalam', cursive;" onclick="ajaxFuga();">
	 							</div>
	 							<div class = "grafica">
	 									<canvas id = "ActividadFuga"></canvas>
	 									<h2 id = "promedioFuga"></h2>
	 							</div>
		  			</div>
						<div id = "proyecciones">
								<p  id = "fugaBoton" onclick="botonActividad('#infoActividad');">Regresar</p>
								<div id="carouselExampleSlidesOnly" style="position:relative; top:2.3em;" class="carousel slide" data-ride="carousel">
								  <div class="carousel-inner">
								    <div class="carousel-item active">
								      <img class="d-block w-100" src="aguaGasto.jpg" alt="First slide">
											<div class="card-img-overlay">
												<h1 id ="vittaz" style="color:black; font-size:3em;">Tu Gasto Hídrico total ha sido de  :&nbsp;&nbsp;&nbsp;&nbsp;<span id = "gastoTotal"></span></h1>
							 				</div>
								    </div>
								  </div>
								</div>
								<canvas id= "crecimientoEscala"></canvas>
								<p  class ="explicacionApartado">Para que puedas obtener más puntos semanalmente al igual de mejores beneficios,
								es indispensable que tu escala esté en crecimiento. Para ello puedes aumentarla ahorrando agua cada díá. Por más mínima que sea
							  mientras ahorres agua, tendrás más puntos!</p>
								<!--<canvas id= "escalaConPuntos" width="800" height="450"></canvas>-->
								<!--Poner aqui tres tarjetas con tres imágenes de categorías de beneficios.-->
								<div class="card-deck">
										  <div class="card">
										    <img class="card-img-top" src="colores/rojo.png" height = "150" alt="Card image cap">
										    <div class="card-body">
										      <h5 class="card-title">Escala Roja</h5>
										      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
										    </div>
										    <div class="card-footer">
										      <small class="text-muted">Escala entre el 20%-40%</small>
										    </div>
										  </div>
										  <div class="card">
										    <img class="card-img-top" src="colores/amarillo.png" height = "150" alt="Card image cap">
										    <div class="card-body">
										      <h5 class="card-title">Escala Amarilla</h5>
										      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
										    </div>
										    <div class="card-footer">
										      <small class="text-muted">Escala entre el 40%-70%</small>
										    </div>
										  </div>
										  <div class="card">
										    <img class="card-img-top" src="colores/verde.png" height = "150" alt="Card image cap">
										    <div class="card-body">
										      <h5 class="card-title">Escala Verde</h5>
										      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
										    </div>
										    <div class="card-footer">
										      <small class="text-muted">Escala entre 70%-100%</small>
										    </div>
										  </div>
								</div>
								<div class="card text-center" style="position:relative; top: 1.5em;">
								  <div class="card-body">
								    <h5 class="card-title">Estado de Fuga</h5>
								    <p class="card-text" id ="estado"></p>
								    <a href="#" class="btn btn-primary" onclick="botonFuga();">Detectar fuga</a>
								  </div>
								  <div class="card-footer text-muted">
								    Si se llega a detectar una fuga, el sistema te estará mandano correos de notificación cada 3 días.
								  </div>
								</div>
								<canvas id= "actividadDentroDeLaCasa"></canvas>
								<p class = "explicacionApartado">En esta gráfica puedes observar el porcentaje que ocupa cada habitación de tu casa en el gasto de agua.
								Representa un aproximado de lo que estás gastando en tiempo real.</p>
						</div>
				</div>
				<div class = "datosUsuario">
						<h2 id = "mainDatos">Datos del Usuario</h2>
						<p>Nombre/s: <span id = "nombre"></span></p>
						<p>Apellido Paterno: <span id = "apellidoPat"></span></p>
						<p>Apellido Materno: <span id = "apellidoMat"></span></p>
						<p>Correo: <span id = "email"></span></p>
						<p>Número de medidor: <span id = "medidor"></span></p>
						<p>Dirección: <span id = "direccion" style="font-size:1em"></span></p>
				</div>
				<div class = "HuellaHidrica">
					<div id = "infoHuellaHidrica">
						<div class="jumbotron">
										<h1 class="display-4" style="color: black">Qué es tu Gasto Hídrico?</h1>
										<p class="lead"style="color: black">Nosotros definimos al Gasto Hídrico como la cantidad promedio de litros neta que gastas al día, a la semana y al mes.</p>
										<hr class="my-4">
										<p style="color: black">En este apartado podrás ver tu Gasto Hídrico y podrás ver su rendimiento a lo largo del tiempo. Se comparará con un gasto ideal y te dará recomendaciones con base en tu Gasto para así reducir tu consumo de agua.</p>
										<a class="btn btn-primary btn-lg" onclick="mostrarConteHReco('#contenido1'); ajaxGastoDia();" role="button">Consultar mi Gasto Hídrico</a>
								</div>
								<div class="row" style="color: black;">
									    <div class="card col">
									      <div class="card-body">
									        <h5 class="card-title" >Consulta de recomendaciones</h5>
									        <p class="card-text">En este apartado podrás consultar las recomendaciones óptimas para que reduzcas tu consumo hídrico. Son actualizables y están en función a tu Gasto Hídrico.</p>
									        <a style="color: #fff;" onclick="mostrarConteHReco('#contenido2'); <?php obtenerRecomendaciones();?>" class="btn btn-primary">Tus Recomendaciones</a>
									      </div>
									  </div>
									    <div class="card col">
									      <div class="card-body">
									        <h5 class="card-title">Mide tu progreso</h5>
									        <p class="card-text">Comparación de tus Gastos Hídricos en un margen de las últimas cinco semanas contra aquellos gastos ideales para contribuir al movimiento de ahorrar agua.</p>
									        <a style="color: #fff;" onclick="mostrarConteHReco('#contenido3'); graficaContraste();" class="btn btn-primary">Tu Gasto vs Gasto Ideal</a>
									      </div>
									    </div>
								<div id = "picturesGasto" class="w-100"onmouseover="ajaxGastoDia();">
											<div class="card bg-dark text-white col" style="max-width: 44.2em; width50%;">
											  <img  src="desperGray.jpg"  class="img-fluid" alt="Responsive image"/>
											  <div class="card-img-overlay">
											    <h2 class="card-title" style="position: absolute; top: 6em; left: 2em; font-family: 'Anton', sans-serif; font-size: 2em; text-align: center;">ACTUALMENTE TU GASTO ES DE: <span id= "MostrandoTUgasto"><?php echo $promedioDia ?><span>Litros por día</h2>
											    <p class="card-text" style="position: absolute; bottom: 1.5em; left: 1em;">Apartado actualizable</p>
											  </div>
									   </div>
										 <div class="card bg-dark text-white col" style="max-width: 44.2em; width50%; margin-left: 2.5em;">
											<img  src="desperGray.jpg" class="img-fluid" alt="Responsive image"/>
											<div class="card-img-overlay">
												<h2 class="card-title" style="position: absolute; top: 6em; left: 1.2em; font-family: 'Anton', sans-serif; font-size: 2em; text-align: center;">Con base en tu Gasto, en un mes estarás gastando: <p id= "MostrandoTUgastoFUTURO"><p>Litros por día, redúcelos!</h2>
												<p class="card-text" style="position: absolute; bottom: 1.5em; left: 1em;">Apartado actualizable</p>
											</div>
									 </div>
							</div>
					</div>
					</div>
					<div id = "contenido1">
						  <h2 class = "recomendacionesBtn" onclick="mostrarConteHReco('#infoHuellaHidrica');">Regresar</h2>
					 		<h2 id = "headHuella"  >Tu Gasto Hídrico</h2>
							<p id = "headContenido1">Aquí podrás ver tus huellas hídricas de los últimos días.</p>
					 		<canvas id = "actividadAguaHuellaHidrica"></canvas>
							<p id = "promedio"></p>
				 	</div>
				 	<div id = "contenido2">
								<div class="card-deck">
											<div class="card">
												<img class="card-img-top" src=<?php echo $_SESSION['recomendacionesPant'][0][1]; ?> alt="Card image cap">
												<div class="card-body">
													<h5 class="card-title"><?php echo $_SESSION['recomendacionesPant'][0][0]; ?></h5>
												</div>
											</div>
											<div class="card">
												<img class="card-img-top" src=<?php echo $_SESSION['recomendacionesPant'][1][1]; ?> alt="Card image cap">
												<div class="card-body">
													<h5 class="card-title" class="cardTitleReco"><?php echo $_SESSION['recomendacionesPant'][1][0]; ?></h5>
												</div>
											</div>
											<div class="card">
												<img class="card-img-top" src=<?php echo $_SESSION['recomendacionesPant'][2][1]; ?> alt="Card image cap">
												<div class="card-body">
													<h5 class="card-title" class="cardTitleReco"><?php echo $_SESSION['recomendacionesPant'][2][0]; ?></h5>
												</div>
											</div>
								</div>
								<div id = "cardDeck2" class="card-deck">
											<div class="card">
												<img class="card-img-top" src=<?php echo $_SESSION['recomendacionesPant'][3][1]; ?> alt="Card image cap">
												<div class="card-body">
													<h5 class="card-title"><?php echo $_SESSION['recomendacionesPant'][3][0]; ?></h5>
												</div>
											</div>
											<div class="card">
												<img class="card-img-top" src=<?php echo $_SESSION['recomendacionesPant'][4][1]; ?> alt="Card image cap">
												<div class="card-body">
													<h5 class="card-title"><?php echo $_SESSION['recomendacionesPant'][4][0]; ?></h5>
												</div>
											</div>
											<div class="card">
												<img class="card-img-top" src=<?php echo $_SESSION['recomendacionesPant'][5][1]; ?> alt="Card image cap">
												<div class="card-body">
													<h5 class="card-title"><?php echo $_SESSION['recomendacionesPant'][5][0]; ?></h5>
												</div>
											</div>
								</div>
								<div class = "pageBefore"  onclick="mostrarConteHReco('#infoHuellaHidrica');">Regresar</div>
					</div>
					<div id = "contenido3">
						  <canvas id = "ContrasteHuella"></canvas>
							<div class = "pageBefore" id = "ultimoRecoHue" onclick="mostrarConteHReco('#infoHuellaHidrica');">Regresar</div>
					</div>
				</div>
				<div class = "inicio" >
						<div id="primerBloque" class="Info">
							<div class="card-group">
									<div class="card">
									<img class="card-img-top" src="ahorrando.jpg" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title">Ahorrando Agua</h5>
										<p class="card-text">Nuestro objetivo a través de esta plataforma es hacer que lleves un control sobre el gasto del agua en tu casa. Con el objetivo de que te concientices de tu consumo y puedas recibir recomendaciones para tu caso.</p>
									</div>
									</div>
									<div class="card">
									<img class="card-img-top" src="fuga.jpg" height="225" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title">Detectando fugas</h5>
										<p class="card-text">Nuestro sistema tiene algpritmos para detectar fugas desde el apartado de "Actividad en mi Casa". Si se llega a detectar fuga, el sistema te estará notificando constantemente para que puedas repararla y detener el consumo excesivo de agua en tu casa.
										</p>
									</div>
									</div>
									<div class="card">
									<img class="card-img-top" src="reco.jpg" height="225" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title">Recomendaciones específicas</h5>
										<p class="card-text">Con base en tu Gasto Hídrico, el sistema escogerá cinco recomendaciones que se adapten a tu consumo hídrico. Mismas que te serán muy útiles para reducir tu consumo y ganar más puntos!</p>
										<p class="card-text"><small class="text-muted">Gana más puntos!</small></p>
									</div>
									</div>
								</div>
								<div class="card-group">
										<div class="card">
										<img class="card-img-top" src="gafica.jpg"height="225" alt="Card image cap">
										<div class="card-body">
											<h5 class="card-title">Control de tu consumo</h5>
											<p class="card-text">Esta plataforma te desplegará toda la actividad hídrica en tu casa mediante gráficos fáciles de entender, mediante los cuales puedes ver tu porgreso cada día.</p>
										</div>
										</div>
										<div class="card">
										<img class="card-img-top" src="sustentabilidad.jpg" height="225" alt="Card image cap">
										<div class="card-body">
											<h5 class="card-title">Sustentabilidad</h5>
											<p class="card-text">Actualmente se están gastando más de trescientos litros de agua por persona al día. Es necesario controlar nuestro consumo y hacernos el hábito de ahorrar agua. La misión principal será la sustentabilidad en México.
											</p>
										</div>
										</div>
										<div class="card">
										<img class="card-img-top" src="dinero.jpg" height="225" alt="Card image cap">
										<div class="card-body">
											<h5 class="card-title">Recomendaciones específicas</h5>
											<p class="card-text">Con base en tu Gasto Hídrico, el sistema escogerá cinco recomendaciones que se adapten a tu consumo hídrico. Mismas que te serán muy útiles para reducir tu consumo y ganar más puntos!</p>
											<p class="card-text"><small class="text-muted">Gana más puntos!</small></p>
										</div>
										</div>
									</div>
					  </div>
						<div class="card">
						  <div class="card-body">
						    <h5 class="card-title">Nuestro medidor inteligente</h5>
						    <p class="card-text">Nuestro medidor tiene que ser instalado en tu casa con la finalidad de poder tener el control sobre tu consumo hídrico.</p>
						    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						  </div>
						  <img id = "cardImgMedidor"class="card-img-bottom" src="medidorVittaz.jpg"alt="Card image cap">
						</div>
						<div class="card text-center" id = "footReco">
						  <div class="card-header">
						    Consulta tus recomendaciones
						  </div>
						  <div class="card-body">
						    <h5 class="card-title">Con base en tu consumo hídrico</h5>
						    <p class="card-text">Se actualizan cada semana!</p>
						    <a href="#" class="btn btn-primary" onclick="mostrarOpcionMadre('.HuellaHidrica'); cambiandoImg('aguaGray.jpg', 'aguaGray.jpg');">Consultar</a>
						  </div>
						  <div class="card-footer text-muted">
						    Cada semana
						  </div>
						</div>
				</div>
				<div class = "Escala">
					<div class="accordion" id="accordionExample" style="max-width: 110em; width:95%; font-family: 'Sunflower', sans-serif; font-size:1.5em;">
							<div class="card">
								<div class="card-header" id="headingOne">
									<h5 class="mb-0">
										<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-size:1em;">
											¿Qué significa nuestra "Escala de Concientización?"
										</button>
									</h5>
								</div>
								<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
									<div class="card-body">
										<div id = "InfoEscala" class="jumbotron">
													<h1>¿Qué es la Escala de Concientización?</h1>
													<div class="parrafo"><p>Nuestra escala de concientización es una relación entre tu consumo hídrico, el consumo ideal y el consumo promedio.
															Mientras más se acerque al cien, tus beneficios serán mayores. La cantidad de puntos que el sistema te otorgará estará en función
															a esta escala. A menor porcentaje, se te darán menor cantidad de puntos.
													</p></div>
										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingTwo">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="font-size:1em;">
											Consultar mi Escala de Concientización
										</button>
									</h5>
								</div>
								<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
										<h1 style="position: absolute; top: 3em; left: 1em;">Tu escala es de:</h1>
										<canvas id="Escala1"></canvas>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingThree">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-size:1em;">
											Rangos
										</button>
									</h5>
								</div>
								<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
									<div class="card-body">
										<div class="alert alert-success" role="alert">
										[0% - 40%] Estás gastando muchísima agua, te sugerimos seguir nuestras recomendaciones específicas para que puedas reducir tu consumo hídrico.
										</div>
										<div class="alert alert-danger" role="alert">
										[40% - 70%] Buen trabajo! Tu ahorro de agua comienza a contribuir de manera sustancial al movimiento de ahorrar agua. No obstante,
										podrías ahorrar aún más agua!
										</div>
										<div class="alert alert-warning" role="alert">
										[70% - 100%] Felicidades!!! Te encuentras en una exclusiva posición dentro de la población. El impacto que provocas en el movimiento es muy importante.
										Pretendemos que todos nuestros usuarios se encuentren como tú. Eres un gran activista del medio ambiente!
										</div>
									</div>
								</div>
							</div>
						</div>
				</div>
	  </div>
	</div>
	<script src = "JavaScriptDocument.js"></script>
	<script src= "JAVAdespUSUARIO.js"></script>
	<script src="EscalaJava.JS"></script>
</body>
</html>
