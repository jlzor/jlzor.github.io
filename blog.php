<!DOCTYPE html>
<?php error_reporting(E_ALL ^ E_NOTICE);
error_reporting(E_ALL ^ E_DEPRECATED); 
session_start();
?>
<html lang="es">
<head>
	<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
 <link rel="stylesheet" href="css/misestilos.css">
 <link rel="stylesheet" href="css/bootstrap.css">
 <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"/>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/bootstrap-social.css">
<link rel="stylesheet" href="css/font-awesome.css">
	<title>Blog - Principal</title>
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
        <li><a href="blog.php">Blog</a></li>
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
 	
		<article class="barra col-xs-12">
 <div class="jumbotron">
 	<ul class="breadcrumb">
  <li><a href="index.php">Inicio</a></li>
  <li class="active">Blog</li>
</ul>
  <?php 
  require_once('includes/conexion.php');
  require_once('includes/config.php');
  require_once('includes/esUsuario.php');
  $dbConn = conectar();
  include('login.php');


  if($loginCorrecto)
	{	
		if ( !empty($_GET['salir']) ) {
	// borramos y destruimos todo tipo de sesion del usuario
	   if(!isset($_SESSION['usuario']))
   {
       ?>
<SCRIPT LANGUAGE='javascript'> 
      alert("No hay ninguna sesion iniciada..."); 
      location.href = "index.php"
      </SCRIPT>"; 
<?
//esto ocurre cuando la sesion caduca.
        
   }
   else
   { 
     session_destroy();
       //echo "Has cerrado la sesion";
echo "<meta content='0;URL=index.php' http-equiv='REFRESH'> </meta>";
	?>
<SCRIPT LANGUAGE='javascript'> 
      alert("Ha finalizado sesion, regresando al inicio..."); 
      location.href = "index.php"
      </SCRIPT>
<?
       
   }

}
	?>
	<div class="container">
	    <div class="row">
        <div align="left" class="col-xs-3">
            <a href="blog.php?opc=2" class="btn btn-danger btn-md btn-block btn-huge">Nuevo Tema</a>
        </div>
             <div align="left" class="col-xs-3">
            <a href="blog.php?opc=1" class="btn btn-danger btn-md btn-block btn-huge">Ver Temas</a>
        </div>
        <? 	
            if($typeUsuarioL=='admin'){
                   ?>  <div align="left" class="col-xs-3">
            <a href="admin/index.php" class="btn btn-danger btn-md btn-block btn-huge">Panel de Administrador</a>
        </div>  <?      
              }
              ?>       <div align="left" class="col-xs-3">
            <a href="blog.php?salir=true" class="btn btn-danger btn-md btn-block btn-huge">Cerrar Sesion</a>
        </div>
        <hr>
    </div>
</div>

<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8" style="margin-top:30px;">
    <div class="panel panel-default" >
      <div class="panel-heading resume-heading" >
        <div class="row" >
          <div class="col-lg-12" >
            <div class="col-xs-12 col-sm-4">
              <figure>
                <img  class="img-circle img-responsive" alt="" src="http://placehold.it/200x200">
              </figure>
              
              <div class="row" style="margin-top:10px">
                <div class="col-xs-12 ">
                  
                    <div class="col-xs-3 col-md-1 col-lg-1" style="margin-right:5px" >
                      <a href="#" class="btn btn-social-icon btn-block btn-google-plus">
                        <i class="fa fa-google-plus"></i> </a>
                    </div>
                  
                    <div class="col-xs-3 col-md-1 col-lg-1" style="margin-right:5px">
                      <a href="#" class="btn btn-social-icon btn-block btn-facebook">
                        <i class="fa fa-facebook"></i> </a>
                    </div>
                  
                    <div class="col-xs-3 col-md-1 col-lg-1" style="margin-right:5px" >
                      <a href="#" class="btn btn-social-icon btn-block btn-twitter">
                        <i class="fa fa-twitter"></i> </a>
                    </div>
                  
                    <div class="col-xs-3 col-md-1 col-lg-1" style="margin-right:5px">
                      <a href="#" class="btn btn-social-icon btn-block btn-linkedin">
                        <i class="fa fa-linkedin"></i> </a>
                    </div>
                  
                    <div class="col-xs-3 col-md-1 col-lg-2" style="margin-right:5px">
                      <a href="#" class="btn btn-social-icon btn-block btn-github">
                        <i class="fa fa-github"></i> </a>
                    </div>
                  
                   
                  
                </div>
              </div>
              
            </div>

            <div class="col-xs-12 col-sm-8" style="margin-bottom:20px;margin-top:30px ">
              <ul class="list-group">
                <li class="list-group-item"><? echo $nombreUsuarioL." ".$apellidoUsuarioL?></li>
                <li class="list-group-item"><? echo $urlUsuarioL?> </li>
                <li class="list-group-item"><i class="fa fa-envelope"></i><? echo " ".$emailUsuarioL?></li>
                <li class="list-group-item"><? echo $typeUsuarioL?> </li>             
              </ul>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
</div>
	<?
	error_reporting(E_ALL ^ E_NOTICE);
	switch ($_GET['opc']) {
		case '1':
			?><div class="container">

	  			<?php
  				include ("includes/includes.php");
				$blogPosts = GetBlogPosts();
				foreach ($blogPosts as $post)
	{ ?>
  <div class="well">
      <div class="media">
      	<a class="pull-left" href="#">
    		<img class="media-object" src="img/mincab.png">
  		</a>
  		<div class="media-body">
    		<h4 class="media-heading"><?php echo $post->title; ?></h4>
          <p class="text-right">By <?php echo $post->author; ?></p>
          <p><?php echo $post->post_full; ?></p>
          <ul class="list-inline list-unstyled">
  			<li><span><i class="glyphicon glyphicon-calendar"></i> <?php echo $post->datePosted; ?> </span></li>
            <li>|</li>
            <span><i class="glyphicon glyphicon-comment"></i> 2 comments</span>
            <li>|</li>
            <li>
          		Tags: <?php echo $post->tags ?>
            </li>
            <li>|</li>
            <li>
            <!-- Use Font Awesome http://fortawesome.github.io/Font-Awesome/ -->
              <span><i class="fa fa-facebook-square"></i></span>
              <span><i class="fa fa-twitter-square"></i></span>
              <span><i class="fa fa-google-plus-square"></i></span>
            </li>
			</ul>
       </div>
    </div>
  </div>
  		<? }?>
</div><?
		break;
		case '2':
			?>
			<br><div class="container">
	<div align="center" class="row">
		<div class="span6">
            <form method="POST" action="blog.php?opc=3">
            	<table>
                <div align="center"  class="controls controls-row">
                    <tr><td><input id="title" name="title" type="text" class="span3" placeholder="Titulo"> 
                    </td></tr><br>
                     <tr><td><input id="post" name="post" type="text" class="span3" placeholder="Subtitulo">
                </div></td></tr><br>
               <tr><td> <div align="center" class="controls">
                    <textarea id="postfull" name="postfull" class="span6" placeholder="Mensaje Completo" cols="40" rows="7"></textarea>
                 </td></tr></div>
                 <tr><td> 
                <div align="center"  class="controls">
                    <button id="contact-submit" type="submit" class="btn btn-primary input-medium pull-center">Enviar</button>
                </td></tr> </div>
            </form>
            </table>
        </div>
	</div>
</div><?;
			break;
		case '3':
			require_once 'includes/config.php';
require_once 'includes/conexion.php';

$dbConn = conectar();
include('login.php');
error_reporting(E_ALL ^ E_NOTICE);
error_reporting(E_ALL ^ E_DEPRECATED); 


if($_POST["title"] != "" && $_POST["post"] != "" && $_POST["postfull"] != "" ) 
{

$sql = "SELECT id FROM usuarios WHERE email='".$emailUsuarioL."'";
$result = mysql_query($sql, $dbConn);
if($row == mysql_fetch_array($result))
{
	?>
	<SCRIPT LANGUAGE='javascript'> 
      	
      alert("Mal Ingreso"); 
      location.href = "blog.php"
      </SCRIPT>
	<?

}
else
{
$hoy = date("Y-m-d"); 
$sql = "INSERT INTO blog_posts (title, post, post_full, author_id , date_posted) 
		VALUES ('".$_POST["title"]."','".$_POST["post"]."','".$_POST["postfull"]."',
			'".$idUsuarioL."','".$hoy."')";
mysql_query($sql, $dbConn);
?>
<SCRIPT LANGUAGE='javascript'> 
      alert("Se ha creado con Exito el post!."); 
      location.href = "blog.php"
      </SCRIPT>"; 
<?
}
mysql_free_result($result);
}
else
{
	?>
<SCRIPT LANGUAGE='javascript'> 
      alert("No se ha podido insertar el articulo.Intenta De nuevo."); 
      location.href = "blog.php"
      </SCRIPT>"; 
	<?
}
mysql_close();
 break;

 		case '4':

		break;
		default:
			
			break;
	}

	}
  else
	{
?>
	<SCRIPT LANGUAGE="javascript"> 
      alert("El sistema no lo ha identificado, solo los usuarios registrados tienen acceso a esta area."); 
     // location.href = "ingresar.php"; 
      </SCRIPT>
<?
	}
   ?>




			</article>

		


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