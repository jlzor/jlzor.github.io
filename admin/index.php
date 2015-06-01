<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
 <link rel="stylesheet" href="../css/misestilos.css">
 <link rel="stylesheet" href="../css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../css/bootstrap-social.css">
<link rel="stylesheet" href="../css/font-awesome.css">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />


		<link rel="stylesheet" type="text/css" href="css/demo.css">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.7/css/jquery.dataTables.css">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/tabletools/2.2.4/css/dataTables.tableTools.css">
		<link rel="stylesheet" type="text/css" href="css/dataTables.editor.css">

		<script type="text/javascript" charset="utf-8" src="https://code.jquery.com/jquery-1.11.2.js"></script>
		<script type="text/javascript" charset="utf-8" src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="https://cdn.datatables.net/tabletools/2.2.4/js/dataTables.tableTools.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="js/dataTables.editor.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="js/table.usuarios.js"></script>
	<title>Control Panel - Usuarios</title>
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
			<div class="col-xs-8 text-center">
        <img src="../img/imglogo.png" alt="Logo">
			</div>
			<div class="col-xs-4 text-right">
				<br>
				<nav class="navbar navbar-inverse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="../index.php">Inicio</a></li>
        <li><a href="../blog.php">Blog</a></li>
        <li><a href="../main.php?opc=2">Portafolio</a></li>
        <li><a href="../main.php?opc=4">Contacto</a></li>
      </ul>
</nav>
			</div>

		</div>
	</header>
	<div class="container-fluid barra">
		<h1></h1>
	</div>
<div class="container-fluid barra">
	<section class="main row barra">
<div class="side-menu col-xs-2">
    
    <nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <div class="brand-wrapper">
            <!-- Hamburger -->


            <!-- Brand -->
            <div class="brand-name-wrapper">
                <a class="navbar-brand" href="#">
                    Admin CP
                </a>
            </div>


        </div>

    </div>

<?php 

		require_once('../includes/config.php');
		require_once('../includes/conexion.php');
		$dbConn = conectar();

		include('../login.php');
error_reporting(E_ALL ^ E_NOTICE);
		if($typeUsuarioL == 'admin'){
			?>
		<!-- Main Menu -->
    <div class="side-menu-container">
        <ul class="nav navbar-nav">

            <li class="active"><a href="users.php"><span class="glyphicon glyphicon-cloud"></span> Usuarios</a></li>
            <li><a href="temas.php"><span class="glyphicon glyphicon-cloud"></span>Temas</a></li>


            <li><a href="../blog.php?salir=true"><span class="glyphicon glyphicon-cloud"></span> Cerrar Sesion</a></li>

        </ul>
    </div><!-- /.navbar-collapse -->
</nav>
    
    </div>
		<article class="barra col-xs-10">
 <div class="jumbotron">
 	<ul class="breadcrumb">
  <li><a href="../index.php">Inicio</a></li>
  <li class="active">CP</li>
</ul>
		<div class="container">
			<h1>
				Panel de Administracion - Control de Usuarios
			</h1>
			
			<table cellpadding="0" cellspacing="0" border="0" class="display" id="usuarios" width="100%">
				<thead>
					<tr>
						<th>firstn</th>
						<th>lastn</th>
						<th>url</th>
						<th>email</th>
						<th>password</th>
						<th>type</th>
					</tr>
				</thead>
			</table>

		</div>


</div>
			</article>

		<?
		}else{
				?>
<SCRIPT LANGUAGE='javascript'> 
      alert("Solo el administrador puede ver este contenido..."); 
      location.href = "../blog.php"
      </SCRIPT>
<?
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
					<img src="../img/cabezalogo.png" width="30%" alt="Logo">
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
					<td><a class="barra2" href="../index.php">Inicio</a>
				</td>
				</tr>
				<tr>
					<td><a class="barra2" href="../main.php?opc=2">Portafolio</a></td>
				</tr>
				<tr>
					<td><a class="barra2" href="../main.php?opc=3">Curriculum Vitae</a></td>
				</tr>
				<tr>
					<td><a class="barra2" href="../main.php?opc=4">Contacto</a></td>
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
	<script src="../js/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>