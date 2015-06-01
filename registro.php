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
	<title>Registro de Usuario</title>
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
  <li class="active">Registrar</li>
</ul>
<div class="row">
	<? error_reporting(E_ALL ^ E_NOTICE);
	switch ( $_GET['registro'] ) { case '1': ?>

	 <div class="alert alert-success"><div style="margin-left:50px">El registro ha sido exitoso.</div></div>
	<? break;error_reporting(E_ALL ^ E_DEPRECATED); 

		case '2':
	?>
	    <div class="alert alert-danger">
		<div style="margin-left:50px">Error, email escogido por otro usuario o verifique que los campos no esten vacios.</div></div><?
	break;
	case '3':
	?><div class="alert alert-danger">
		<div style="margin-left:50px">Error, las contraseñas no coinciden. Vuelve a intentarlo.</div></div><?
	break;
	case '4':

require_once 'includes/config.php';
require_once 'includes/conexion.php';

$dbConn = conectar();

error_reporting(E_ALL ^ E_NOTICE);
error_reporting(E_ALL ^ E_DEPRECATED); 

if($_POST["email"]!= "" && $_POST["password"] != "" && $_POST["first_name"] != "" && $_POST["last_name"] != "" && $_POST["url"] != "") 
{
	if($_POST["password"] != $_POST["password_confirmation"]){
	header('Location: registro.php?registro=3');
	continue;
}
$sql = "SELECT id FROM usuarios WHERE email='".$_POST["email"]."'";
$result = mysql_query($sql, $dbConn);
if($row = mysql_fetch_array($result))
{
	header( 'Location: registro.php?registro=2' );

}
else
{
$sql = "INSERT INTO usuarios (first_name, last_name, url,email,password,type) 
		VALUES ('".$_POST["first_name"]."','".$_POST["last_name"]."','".$_POST["url"]."',
			'".$_POST["email"]."','".$_POST["password"]."','normal')";
mysql_query($sql, $dbConn);

header( 'Location: registro.php?registro=1' );
}
mysql_free_result($result);
}
else
{
	header( 'Location: registro.php?registro=2' );
}
mysql_close();
 break;
	default:
	break;} ?>
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form action="registro.php?registro=4" method="POST" role="form">
			<h2>Registrarse <small>Es grátis, fácil y rápido.</small></h2>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2">
					</div>
				</div>
			</div>
			<div class="form-group">
				<input type="text" name="url" id="url" class="form-control input-lg" placeholder="Url" tabindex="3">
			</div>
			<div class="form-group">
				<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-4 col-sm-3 col-md-3">
					<span class="button-checkbox">
						<button type="button" class="btn" data-color="info" tabindex="7">Estoy de Acuerdo</button>
                        <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
					</span>
				</div>
				<div class="col-xs-8 col-sm-9 col-md-9">
					 By clicking <strong class="label label-primary">Registrar</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.
				</div>
			</div>
			
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-6"><input type="submit" value="Registrar" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
				<div class="col-xs-12 col-md-6"><a href="ingresar.php" class="btn btn-success btn-block btn-lg">Ingresar</a></div>
			</div>
		</form>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
			</div>
			<div class="modal-body">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
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