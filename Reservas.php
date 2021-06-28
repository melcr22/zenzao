<?php

include("db.php"); /*Conexión a la base de datos*/

/*Confirmación y obtención de datos*/

    if (isset($_POST['enviar'])){  

    $nombre=$_POST['Nom'];
    $telefono=$_POST['Tel'];
    $correo=$_POST['Correo'];
    $fecha=$_POST['Fecha'];
    $hora=$_POST['Hora'];
    $servicio=$_POST['Serv'];
    $cantidad=$_POST['Numper'];
    $edad=$_POST['Edad'];
 
/*sentencia de consulta para insertar datos*/

    $sql = "INSERT INTO reservaciones (Nombre, Telefono, Correo_electronico, fecha, Hora, Servicio, Cantidad_de_personas, Edad) 
    VALUES ('$nombre','$telefono','$correo','$fecha','$hora','$servicio',$cantidad,'$edad')";

    $result = mysqli_query($connect, $sql);

/*confirmación de funcionamiento*/

    if(!$result)
    {
        die("Error al registrar los datos".mysqli_error($connect));
    }


 /*Mensaje, tipo de la ventana emergente con el menssaje y el redireccionamiento de la página*/  
    $_SESSION['mensaje'] = "Reservación completada con exito";
    

   header('Location:Reservaciones.php');
}

    
    



    //Comprobar conexion

  
/*
    if(!$connect)
    {
        die ("Error".mysqli_connect_error());
    }
*/           

?>