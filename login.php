<?php 
error_reporting(E_ALL ^ E_NOTICE);
error_reporting(E_ALL ^ E_DEPRECATED); 

      $loginCorrecto = false; 
      $idUsuarioL; 
      $nombreUsuarioL;       
      $apellidoUsuarioL;
      $urlUsuarioL; 
      $emailUsuarioL; 
      $typeUsuarioL;


if(isset($_COOKIE["usEmail"]) && isset($_COOKIE["usPass"]))
{
$result = mysql_query("SELECT * FROM usuarios WHERE email='".$_COOKIE["usEmail"]."' AND password='".$_COOKIE["usPass"]."'");

if($row = mysql_fetch_array($result))
{
setcookie("usEmail",$_COOKIE["usEmail"],time()+7776000);
setcookie("usPass",$_COOKIE["usPass"],time()+7776000);
$loginCorrecto = true;
$idUsuarioL = $row["id"];
$nombreUsuarioL = $row["first_name"];
$apellidoUsuarioL = $row['last_name'];
$urlUsuarioL = $row["url"];
$emailUsuarioL = $row["email"];
$typeUsuarioL = $row['type'];
}
else
{
//Destruimos las cookies.
setcookie("usEmail","x",time()-3600);
setcookie("usPass","x",time()-3600);
}
mysql_free_result($result);
}
?>
