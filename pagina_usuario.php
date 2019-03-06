<?php
//Proceso de conexión con la base de datos
	require("conex.php");
	$conex = conexion();

//Iniciar Sesión
session_start();

//Validar si se está ingresando con sesión incorrectamente se envia al login
if (!$_SESSION){
	header("location:index.html");	
}
//Validar si la cookie está activa
 if(isset($_COOKIE['login'])){ 
	// Cookie creada y activa
}else{ 
	//cookie destruida, cierra la sesion y manda al login
	session_destroy();
	echo "<center><h2>La sesión agotó el tiempo de vida</h2><br>";
	echo "<a href=index.html>Ir al login </a></center>";
	exit;// Salimos corriendo (evita que se siga ejecutan do los códigos siguiente)
} 
	
//.*.*.*.*.*.*.*.**.*..*.*.*.*.*.*.*.**.*..*.*.*.*.*.*.*.**.*..*.*.*.*.*.*.*.**.*..*.*.*.*.*.*.*.**.*.
// aca se vuelve a buscar al usuario logeado a través del ID para obtener otros datos de la BD (ESPECIFICAMENTE EL PAIS Y COLOCARLO EN UNA NUEVA VARIABLE DE SESIÓN)
$id_usuario= $_SESSION['GMAIL'];
$usuario= $_SESSION['nombre'];
$consulta="SELECT * FROM jugardores WHERE Apodo='$id_usuario' AND Juego_favorito='$id_usuario'";
$resultado=mysqli_query($conex,$consulta) or die(mysqli_error());
$resultado_obtenido=mysqli_fetch_array($resultado);
$pais= $resultado_obtenido['Juego_favorito'];
	
//.*.*.*.*.*.*.*.**.*..*.*.*.*.*.*.*.**.*..*.*.*.*.*.*.*.**.*..*.*.*.*.*.*.*.**.*..*.*.*.*.*.*.*.**.*.
mysqli_close($conex);
?>

  <!DOCTYPE html>
<html lang="en">
<head>
<title>Universo.Net</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Historical Games Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<link rel="stylesheet" href="css/skuuu.css" type="text/css" media="all" />

<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>


</head>
<body>
	
	<div class="banner">
		<div class="banner-dot">
		
		<div class="header-top">
			<div class="container">
				<div class="header-left">
					<h1><a href="index.html">Universo.Net <span>GAMER</span></a></h1>
				</div>
				<div class="header-middle">
					<ul>
						<li>   <?php echo $_SESSION['GMAIL'];?></li>
						<li><a href=""><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>enviar correo</a></li>
					</ul>
				</div>
				<div class="header-right">
					<div class="search">
						<form action="#" method="post">
							<input type="search" name="buscar" value="buscar" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
							<input type="submit" value=" ">
						</form>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="header">
			<div class="container">		
				<nav class="navbar navbar-default">
					<div class="navbar-header">
					 </td>	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"></a>
							<span class="sr-only">Navegador</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
				
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="index.html" class="active">Casa</a></li>
							<li><a href="pagina2.php" class="scroll">novedades</a></li>
							<li><a href="#gallery" class="scroll">Fotos</a></li>
							<li><a href="#news" class="scroll">Nuevo</a></li>
							<li><a href="#team" class="scroll">Equipo</a></li>
							<li><a href="desconectar_usuario.php" >Cerrar Sesion</a></li>
						</ul>	
						<div class="clearfix"> </div>	
					</div>
				</nav>
			</div>
		</div>
	
		<div class="banner-info">
			<div class="container">
				<div class="w3layouts-text">
					<h3>Juego Prefedido de <?php echo $_SESSION['GMAIL'];?></h3>
					<label></label>
					<h2> <?php echo $_SESSION['nombre']; ?></h2>
				</div>
				
			</div>
		</div>
	
		</div>
	</div>
	
	<div class="welcome" id="about">
		<div class="container">
			<div class="col-md-6 agileits_welcome_grid_left">
				<h3>assassins creed origins</h3>
				<p>Este nuevo titulo esta ambientado en torno al año 49 a. C., con el reinado de Cleopatra VII, en el Antiguo Egipto dominado por la Republica Romana, ya que en el logo del videojuego aparece el Ojo de Horus, que coincide con el origen de la Hermandad de los Asesinos

El jugador toma el rol de un Medjay llamado Bayek que protege a la gente del Reino Ptolemaico en un tiempo de disturbios. El faraon, Ptolomeo XIII, lucha por mantener su poder al tiempo que ambiciona con expandirlo. Su hermana, la reciente depuesta Cleopatra, empieza a organizar un contra-golpe hacia el, y las frecuentes incursiones de la Republica Romana bajo el
 comando de Julio Cesar llevan al temor de una invasion. El objetivo de Bayek como un Medjay es contactarse con las fuerzas secretas manipulando esos eventos y convirtiendose en uno de los primeros asesinos.</i></p>
			</div>
			<div class="col-md-6 agileits_welcome_grid_right">
				<img src="images/1.jpg" alt=" " class="img-responsive" />
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	
	
	

	
	<div id="gallery" class="gallery">
			<div class="container">
				<h3>Fotos</h3>   
				<div id="jzBox" class="jzBox">
					<div id="jzBoxNextBig"></div>
					<div id="jzBoxPrevBig"></div>
					<img src="#" id="jzBoxTargetImg" alt="">
					<div id="jzBoxBottom">
						<div id="jzBoxTitle"></div>
						<div id="jzBoxCounter"></div>
						<span id="jzBoxMoreItems"> 
							<i class="glyphicon glyphicon-menu-left" id="jzBoxPrev"></i> &nbsp;
							<i class="glyphicon glyphicon-menu-right" id="jzBoxNext"></i> &nbsp;
						</span>
						<i class="glyphicon glyphicon-remove-circle" id="jzBoxClose"></i>
					</div>
				</div>
				<div class="w3ls-gallery-grids">
					<div class="col-md-4 gallery-grid">
						<div class="wpf-demo-4">  
							<a href="images/g1.jpg" class="jzBoxLink item-hover" title="Maecenas sodales tortor ac ligula ultrices dictum et quis urna.">  
								<img src="images/g1.jpg" class="img-responsive" alt=" " />
								<div class="view-caption">
									<p>GTA 5</p>
								</div> 
							</a>    		
						</div>
						<div class="wpf-demo-4">  
							<a href="images/g2.jpg" class="jzBoxLink item-hover" title="Etiam pulvinar metus neque eget porttitor massa.">  
								<img src="images/g2.jpg" alt=" " class="img-responsive" />
								<div class="view-caption">
									<p>Fallout 4</p>
								</div> 
							</a>    			
						</div>
						<div class="wpf-demo-4">  
							<a href="images/g7.jpg" class="jzBoxLink item-hover" title="Etiam pulvinar metus neque eget porttitor massa.">  
								<img src="images/g7.jpg" alt=" " class="img-responsive" />
								<div class="view-caption">
									<p>Exclusivos+</p>
								</div> 
							</a>    			
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 gallery-grid">
						<div class="wpf-demo-4">  
							<a href="images/g3.jpg" class="jzBoxLink item-hover" title="Etiam pulvinar metus neque eget porttitor massa.">  
								<img src="images/g3.jpg" alt=" " class="img-responsive" />
								<div class="view-caption">
									<p>Fortnite</p>
								</div> 
							</a>    			
						</div>
						<div class="wpf-demo-4">  
							<a href="images/g4.jpg" class="jzBoxLink item-hover" title="Etiam pulvinar metus neque eget porttitor massa.">  
								<img src="images/g4.jpg" alt=" " class="img-responsive" />
								<div class="view-caption">
									<p>LOL</p>
								</div> 
							</a>    			
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 gallery-grid">
						<div class="wpf-demo-4">  
							<a href="images/g6.jpg" class="jzBoxLink item-hover" title="Etiam pulvinar metus neque eget porttitor massa.">  
								<img src="images/g6.jpg" alt=" " class="img-responsive" />
								<div class="view-caption">
									<p>Call Of duty IIII</p>
								</div> 
							</a>  
						</div> 
						<div class="wpf-demo-4">  
							<a href="images/g8.jpg" class="jzBoxLink item-hover" title="Etiam pulvinar metus neque eget porttitor massa.">  
								<img src="images/g8.jpg" alt=" " class="img-responsive" />
								<div class="view-caption">
									<p>Assisen´s Creed Black Flag</p>
								</div> 
							</a>    			
						</div>
						<div class="wpf-demo-4">  
							<a href="images/g5.jpg" class="jzBoxLink item-hover" title="Etiam pulvinar metus neque eget porttitor massa.">  
								<img src="images/g5.jpg" alt=" " class="img-responsive" />
								<div class="view-caption">
									<p>Red Dedemtion 2</p>
								</div> 
							</a>    			
						</div> 
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<script src="js/jzBox.js"></script>
			</div>
	</div>
	
	<div class="testimonial jarallax">
		<div class="w3-agileits-testimonial">
			<div class="container">
				<h3>Historia de FarCray 4</h3>
				<div class="wthree-testimonial-grid">
						<div class="slider">
								<div class="callbacks_container">
									<ul class="rslides" id="slider3">
										<li>
											<div class="testimonial-top">
												
												<p>Far Cry 4 sigue ofreciendo poco a poco mas detalles sobre su historia. En esta ocasion, 'por error'. En Uplay, el servicio de usuarios registrados de Ubisoft, ha aparecido la ficha del juego con su correspondiente sinopsis, ya retirada tras la filtracion. En ella se revelaba que el protagonista se llamara Ajay Ghale y que viajara hasta Kyrat, en el Himalaya, para cumplir la ultima voluntad de su madre. Alli, se vera envuelto en una guerra civil liderada por el dictador Pagan Min, antagonista del argumento. Aqui teneis una captura de la eliminada ficha.</p>
												<h5> <span></span></h5>
											</div>
										</li>
										<li>
											<div class="testimonial-top">
												
												<p>El lanzamiento de Far Cry 4 esta previsto para el 20 de noviembre de este año. Saldra para Xbox 360, Xbox One, PS3, PS4 y PC. La aventura volvera a ser en primera persona en un mundo abierto, con la mezcla de elementos shooter y sandbox que tanto exito ha cosechado. En esta entrega, Ubisoft ha confirmado que el modo multijugador tendra mas importancia, con tal de que la experiencia global para el jugador sea mas duradera. La reserva del titulo se vera recompensada con la actualizacion digital a la versión limitada de Far Cry 4, con varios añadidos adicionales.</p>
												<h5> <span></span></h5>
											</div>
										</li>
									</ul>
								</div>
								
					
</body>	
</html>
</body>
</html>