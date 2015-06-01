
<?

function esUsuario ( $usuario, $password, $conexion ) {
 
// verifica que esten los dos campos completos.
if ($usuario=='' || $password=='') return false;
include('login.php');

 
// busqueda de los datos de usuarios para loguear.
$query = "SELECT id, first_name, password FROM `usuarios` WHERE email = '$emailUsuarioL'";
$resultado = mysql_query ($query, $conexion);
$row = mysql_fetch_array ($resultado);
$password_from_db = $row ['password'];
unset($query);
 
// verifica que el pass enviado sea igual al pass de la db.
if ( $password_from_db == $password ) {
return $row;
} else return false;
 
}
 
?>