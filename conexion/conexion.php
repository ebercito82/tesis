<?php
global $hostname_conexion, $database_conexion, $username_conexion, $password_conexion;
//$hostname_conexion = 'mysql.hostinger.com.ar';
//$database_conexion = "u830135838_7div";
//$username_conexion = "u830135838_root";
//$password_conexion = "1nf@nt3ria";
$hostname_conexion = 'localhost';
$database_conexion = "emse";
$username_conexion = "root";
$password_conexion = "";
@$conexion = mysqli_connect($hostname_conexion, $username_conexion, $password_conexion) or die ("conexion fallida");
mysqli_select_db($conexion,$database_conexion) or die ("Error al conectarse a la base de  datos".mysqli_error($conexion));
?>
