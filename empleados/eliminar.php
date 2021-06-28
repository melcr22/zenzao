<?php

///INCLUIR LA CONEXION CON MYSQL
include("db.php");


///RECIBIR TODOS ESTOS PARAMETROS 
if(isset($_GET['id_empleados'])) {
  $id = $_GET['id_empleados'];
  $sql = "DELETE FROM empleado WHERE id_empleados = $id";
  $resultado = mysqli_query($conn, $sql);
  if(!$resultado) {
    die("Query Failed.");
  }

  ///MENSAJE DE ALERTA
  $_SESSION['message'] = 'Datos removidos exitosamente';
  $_SESSION['message_type'] = 'danger';
  header('Location: index.php');
}

?>