<?php
 error_reporting(E_ALL ^ E_NOTICE);
error_reporting(E_ALL ^ E_DEPRECATED); 
function conectar () {
 error_reporting(E_ALL ^ E_DEPRECATED); 
$db_con = mysql_pconnect (DB_SERVER,DB_USER,DB_PASS);
if (!$db_con) return false;
if (!mysql_select_db (DB_NAME, $db_con)) return false;
return $db_con;
 
}
 
?>