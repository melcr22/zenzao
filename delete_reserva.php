<?php

include("db.php"); /*Conexión a la base de datos*/

/*obtención del id para eliminar los datos con consulta a mysql*/

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $sql = "DELETE FROM reservaciones WHERE id = $id";
    $result = mysqli_query($connect, $sql);
    if(!$result){

        die("Tarea fallida");
    }

/*Mensaje, tipo de la ventana emergente con el menssaje y el redireccionamiento de la página*/  
    $_SESSION['message'] = 'Se removió su reservación';
    $_SESSION['message_type'] = 'danger';
    header("Location: Reservaciones.php");


}

?>