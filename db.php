<?php 
 
session_start();

/*conexión a la BD*/

$servidor="localhost";
$usuario="root";
$clave="";
$DB="Zensao_spa";

$connect = mysqli_connect($servidor,$usuario,$clave,$DB);


?>