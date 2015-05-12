<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
 <link rel="stylesheet" href="css/misestilos.css">
 <link rel="stylesheet" href="css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/bootstrap-social.css">
<link rel="stylesheet" href="css/font-awesome.css">
	<title>Document</title>
	  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
</head>
<body class="barra">
	<header>
		<div class="container">
			<div class="col-xs-5 text-center">
        <img src="img/imglogo.png" alt="Logo">
			</div>
			<div class="col-xs-4 text-right">
				<br>
				<nav class="navbar navbar-inverse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Inicio</a></li>
        <li><a href="main.php?opc=1">Biografia</a></li>
        <li><a href="main.php?opc=2">Portafolio</a></li>
        <li><a href="main.php?opc=4">Contacto</a></li>
      </ul>
</nav>
			</div>
			<div class="col-xs-3 text-right">
				<br>
		<div class="input-group input-xs">
    <input type="text" class="form-control" value="Buscar"/>
    <span class="input-group-addon">
        <i class="fa fa-search"></i>
    </span>
</div>
			</div>
		</div>
	</header>
	<div class="container-fluid barra">
		<h1></h1>
	</div>
<div class="container-fluid barra">
	
	<section class="main row barra">
 		<?php 
			switch ($_GET['opc']) {
				case '1':
					?>			<article class="barra col-xs-12">
 <div class="jumbotron">
 	<ul class="breadcrumb">
  <li><a href="index.php">Inicio</a></li>
  <li class="active">Biografia</li>
</ul>
<h2>Acerca de mi...</h2>
<p>Me dedico a eso de la programación! Me destaco trabajando en soporte técnico y en aplicaciones/paginas web. Tengo experiencia en lenguajes como PHP, Python y Javascript entre muchos otros. También soy hábil estructurando y consultando bases de datos.

Me gusta que el código sea ordenado, semántico y mantenible. Si tienes una idea loca o algún proyecto interesante, contáctame y lo hacemos realidad! Cada proyecto se convierte en una oportunidad para aprender nuevas habilidades y demostrar mis conocimientos.

Yo uso <a href="http://www.slackware.com/">Slackware</a>, mi codigo está en Github, me puedes encontrar en <a href="http://google.com.mx">Google+</a> y aveces participo en <a href="http://stackoverflow.com/">StackOverflow.</a></p>
<hr noshade="noshade" />
<p></p>
</div>
			</article><?
					break;
				case '2':
				?> 
				<article class="barra col-xs-12">
					<div class="jumbotron">
						 	<ul class="breadcrumb">
  <li><a href="index.php">Inicio</a></li>
  <li class="active">Portafolio</li>
</ul>
<h2>Mi Portafolio.</h2>
<p>
	  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="img/img1.jpg" alt="Chania">
        <div class="carousel-caption">
          <h3>www.snaconsultoriaacustica.com</h3>
      
        </div>
      </div>

      <div class="item">
        <img src="img/img2.jpg" alt="Chania" width="200" height="200">
        <div class="carousel-caption">
          <h3>www.hispanoeuropea.es</h3>
        </div>
      </div>
    
      <div class="item">
        <img src="img/img3.jpg" alt="Flower" width="200" height="200">
        <div class="carousel-caption">
          <h3>www.garciamado.es</h3>
        </div>
      </div>

      <div class="item">
        <img src="img/img4.jpg" alt="Flower" width="200" height="200">
        <div class="carousel-caption">
          <h3>www.anneleenlenaerts.com</h3>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>	
	
</p>
<hr noshade="noshade" />
<p></p>
</div></article><?
				break;
				case '3':?>
				<article class="barra col-xs-12">
					<div class="jumbotron">
						 	<ul class="breadcrumb">
  <li><a href="index.php">Inicio</a></li>
  <li class="active">Curriculum Vitae</li>
</ul>
<center>
<h2>Curriculum Vitae</h2>
<hr noshade="noshade" />
<div class="m">
<h3>Jose Luis Ortega Arana</h3>
<h4>Ingeniero de Telecomunicaciones,
Especialidad Telecontrol y Robótica</h4>
<img src="http://arapajoe.es/images/fotoweb.jpg" class="portraitbig">
<h4>Trayectoria Profesional</h4>
<h5>Analista Software</h5>
Desde Mayo 2011, contratado como 
Analista Programador Software para <a href="http://www.telvent.com/es/" target="telvent">Telvent Energía</a>. Soluciones IEC 61850 para subestaciones eléctricas.
<h5>Administrador de sistemas en entorno CI</h5>
Desde Diciembre 2010 hasta Mayo 2011, administrador de servidores y entornos de integración continua (GNU/Linux) en <abbr title="Telvent Global Services">TGS</abbr>.
<h5>Consultor Movilidad</h5>
Desde Diciembre 2009 hasta Diciembre 2010, contratado como Consultor de Movilidad en <abbr title="Telvent Global Services">TGS</abbr>.
<h5>Analista Programador Software</h5>
Desde Octubre de 2008 hasta Diciembre 2009, contratado como 
Analista Programador Software para <a href="http://www.telvent.com/es/" target="telvent">Telvent Energía</a>.
<h5>Becario Investigación</h5>
Desde Octubre 2007 hasta Ocubre 2008, becario de investigación en el Departamento de Sistemas y Automática de la <a href="www.us.es" title="Universidad de Sevilla" alt="Universidad de Sevilla">Universidad de Sevilla</a>.
<h4>Por cuenta propia</h4>
<h5>Desarrollo Web</h5>
<p>Proceso completo de proyecto de página web (HTML/CSS). Diseño, desarrollo, puesta en servicio, SEO, etc.</p>
<p>Ejemplo: <a href="http://www.derechopenal.unican.es/" title="Seminario Derecho Penal">Página web del Seminario de Derecho Penal, de la Universidad de Cantabria</a>.</p>
<h5>Aplicaciones Android</h5>
<p>Desarrollo de pequeñas aplicaciones para android, como un conversor de unidades, y un programa de control de estancia.</p>
<h4>Temas de Investigación</h4>
Desarrollo de Firmware para el manejo de los procesos básicos de un UAV
y para el aterrizaje autónomo.
<h4>Resumen de Investigación</h4>
Ha desarrollado un Firmware sobre
un PIC24 (Microchip) para el control de los procesos básicos de un <a href="http://es.wikipedia.org/wiki/UAV" target="wiki">UAV</a>, a
través de una beca de Investigación con <a href="http://www.aicia.es/" target="aicia">AICIA</a> y una beca de
Colaboración (MEC). Todo ello para el <a href="http://grvc.us.es/componentes.php" target="grupo">Grupo de Robótica,
Visión y Control</a> de la <a href="http://www.us.es" target="us">Universidad de Sevilla</a>.<br>
Resumen de la investigación realizada, disponible en línea, <a href="content/resumen.pdf">aquí</a>.

</div>
</div></article>
				<?
				break;
				case '4':?>

								<article class="barra col-xs-12">
					<div class="jumbotron">
						 	<ul class="breadcrumb">
  <li><a href="index.php">Inicio</a></li>
  <li class="active">Contacto</li>
</ul>
<h2>Contactame</h2>
<hr noshade="noshade" />
<form role="form">
  <div class="form-group">
    <label for="ejemplo_email_1">Email</label>
    <input type="email" class="form-control" id="ejemplo_email_1"
           placeholder="Introduce tu email">
  </div>
  <div class="form-group">
    <label for="ejemplo_password_1">Contraseña</label>
    <input type="password" class="form-control" id="ejemplo_password_1" 
           placeholder="Contraseña">
  </div>
  <div class="form-group">
    <label for="ejemplo_archivo_1">Adjuntar un archivo</label>
    <input type="file" id="ejemplo_archivo_1">
    <p class="help-block">Ejemplo de texto de ayuda.</p>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Activa esta casilla
    </label>
  </div>
  <button type="submit" class="btn btn-default">Enviar</button>
</form>
</div></article>
				<?
				break;
				default:
					# code...
					break;
			}

		 ?>

	</section>
	<div class="container-fluid barra">
		<h1></h1>
	</div>
		<div class="container-fluid">		
			<article class="barra col-xs-12">
				<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">¿Para que soy bueno?</h3>
  </div>
</div>
			</article>
			</div>
 <div class="row color2">
 		<div class="container-fluid barra2">
		<h1></h1>
	</div>
 	<div class="col-xs-12 col-sm-6 col-md-3">
 		<br>
 		<div class="panel panel-primary">
  <div class="panel-heading text-center">
    <h3 class="panel-title">Tecnologias Web</h3>
  </div>
  <div class="panel-body">
    		<p>
 			Experiencia con PHP, Python y todo lo relacionado con la web moderna HTML5, CSS3 (Responsive Design), Javascript y la lista sigue...
 		</p>
  </div>
</div>
 	</div>
 	<div class="col-xs-12 col-sm-6 col-md-3">
 		<br>
 	<div class="panel panel-primary">
  <div class="panel-heading text-center">
    <h3 class="panel-title">Sistemas Operativos</h3>
  </div>
  <div class="panel-body">
    		 		<p>
Llevo mucho tiempo trabajando con varios sistemas operativos como Linux, Windows y AIX entre otros. 		</p>
 	<br>
 	</div>
  </div>
</div>

	<!--	<div class="clearfix visible-sm-block"></div> -->
<!-- 	<div class="color1 col-xs-12 col-sm-6 col-md-3 col-md-offset-3"> -->
 	<div class="col-xs-12 col-sm-6 col-md-3">
 		<br>
 	<div class="panel panel-primary">
  <div class="panel-heading text-center">
    <h3 class="panel-title">Servidores & Bases de Datos</h3>
  </div>
  <div class="panel-body">
    		 	<p>
Apache? Nginx? Lighthttpd? Te los configuro! - MySQL? PostgreSQL? Con mucho gusto Te ayudo a optimizar las consultas! 		</p>
 	</div> 	</div>
  </div>
<div class="col-xs-12 col-sm-6 col-md-3">
	<br>
 	<div class="panel panel-primary">
  <div class="panel-heading text-center">
    <h3 class="panel-title">Seguridad</h3>
  </div>
  <div class="panel-body">
    		 	<p>
Sabes lo que es SQL Injection? XSS? CSRF? RFI? Session Fixation? - No? Yo Si! Y hare lo posible para que no tengas esas preocupaciones! 		</p>
 	</div> 	</div>
 	</div> 

</div>
</div>
 	<div class="container-fluid color1">
 		<h1></h1>
 	</div>
	<footer>
<!-- 		<div class="container-fluid"> -->
		<div class="container-fluid">
			<div class="col-xs-12 col-sm-6 col-md-3 text-center">
				<br>
					<img src="img/cabezalogo.png" width="30%" alt="Logo">
					<br><small>Copyright &copy; Jose Luis Ortega - 2015</small>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 text-center">
			<h5>REDES SOCIALES</h5>
		    <a class="btn btn-social-icon btn-twitter btn-lg">
    		<i class="fa fa-twitter"></i>
		    </a>
		    <a class="btn btn-social-icon btn-facebook btn-lg">
    		<i class="fa fa-facebook"></i>
		    </a>			
		    <a class="btn btn-social-icon btn-google-plus btn-lg">
    		<i class="fa fa-google-plus"></i>
		    </a>	
		    <a class="btn btn-social-icon btn-instagram btn-lg">
    		<i class="fa fa-instagram"></i>
		    </a>
		    <a class="btn btn-social-icon btn-github btn-lg">
    		<i class="fa fa-github"></i>
		    </a>
		    <a class="btn btn-social-icon btn-pinterest btn-lg">
    		<i class="fa fa-pinterest"></i>
		    </a>
		    <a class="btn btn-social-icon btn-soundcloud btn-lg">
    		<i class="fa fa-soundcloud"></i>
		    </a>	
		    <a class="btn btn-social-icon btn-dropbox btn-lg">
    		<i class="fa fa-dropbox"></i>
		    </a>
		    <a class="btn btn-social-icon btn-openid btn-lg">
    		<i class="fa fa-openid"></i>
		    </a>	
		    <a class="btn btn-social-icon btn-yahoo btn-lg">
    		<i class="fa fa-yahoo"></i>
		    </a>					
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 text-center">
			<h5>MENU</h5>
			<table align="center">
				<tr>
					<td><a class="barra2" href="index.php">Inicio</a>
				</td>
				</tr>
				<tr>
					<td><a class="barra2" href="main.php?opc=2">Portafolio</a></td>
				</tr>
				<tr>
					<td><a class="barra2" href="main.php?opc=3">Curriculum Vitae</a></td>
				</tr>
				<tr>
					<td><a class="barra2" href="main.php?opc=4">Contacto</a></td>
				</tr>
			</table>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<h5 align="center">CONTACTO</h5>
			<small>Fernández de Cordova #192
					Fracc. Haciendas del Santuario
					Cd. Culiacan, Sinaloa., MX, CP. 80120<br>
					Tel. +52 (667) 306.72.15<br>
					Mail. admin@jlortega.com<br><br></small>

			</div>


		</div>


	</footer>	


	<script src="/Users/JlzOrtega/Documents/PAGINA WEB/bootstrap/js/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>