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
	<title>Iniciar Sesion - Mi Cuenta</title>
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
        <li><a href="ingresar.php">Blog</a></li>
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
  <li class="active">Ingresar</li>
</ul>
<h3 align="center">Debes iniciar sesion para ingresar a nuestro blog.</h3>
<div class="row" style="margin-top:20px">
  <?php 
error_reporting(E_ALL ^ E_NOTICE);
  switch ($_GET['login']) {
  	case '1':
  		?><SCRIPT LANGUAGE="javascript"> 
      alert("No deje campos Vacios"); 
      ///location.href = "ingresar.php"; 
      </SCRIPT><?
  		break;

  	case '2':

  	require_once('includes/config.php');
	require_once('includes/conexion.php');
	
$dbConn = conectar();

if($_POST['email'] == "" OR $_POST['password'] == ""){
	 		?><SCRIPT LANGUAGE="javascript"> 
      alert("No deje campos Vacios"); 
      location.href = "ingresar.php"; 
      </SCRIPT><?
}else{


	$emailN= $_POST['email'];
	$passN= $_POST['password'];
	$result = mysql_query("SELECT password FROM usuarios WHERE email='".$emailN."'");
	if($row = mysql_fetch_array($result))
	{
	if($row["password"] == $passN)
	{
//90 dias dura la cookie
	setcookie("usEmail",$emailN,time()+7776000);
	setcookie("usPass",$passN,time()+7776000);


?><SCRIPT LANGUAGE='javascript'> 
      alert("Ingreso exitoso"); 
      location.href = "blog.php"
      </SCRIPT>"; 
      
<?
}else{
	?>
	<SCRIPT LANGUAGE="javascript"> 
      alert("Contraseña Incorrecta, intentelo de nuevo."); 
      location.href = "ingresar.php"; 
      </SCRIPT> 
	<?
}
  	}else{
	?>
	<SCRIPT LANGUAGE="javascript"> 
      alert("Email Incorrecto, intentelo de nuevo."); 
      location.href = "ingresar.php"; 
      </SCRIPT> 
	<?
}
  }
  		break;
  	
  	default:
  		# code...
  		break;

}

?>

    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
    <form action="ingresar.php?login=2" method="post" role="form">
      <fieldset>
        <h2>Ingresa tu cuenta.</h2>
        <hr class="colorgraph">
        <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Correo Electrónico">
        </div>
        <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Contraseña">
        </div>
        <span class="button-checkbox">
          <button type="button" class="btn" data-color="info">Recuerdame</button>
                    <input type="checkbox" name="remember_me" id="remember_me" checked="checked" class="hidden">
          <a href="" class="btn btn-link pull-right">Olvidaste la contraseña?</a>
        </span>
        <hr class="colorgraph">
        <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-6">
                        <input type="submit" class="btn btn-lg btn-success btn-block" value="Ingresar">
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6">
            <a href="registro.php" class="btn btn-lg btn-primary btn-block">Registrar</a>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
</div>

</div>
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