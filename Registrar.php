<?php

  //Conexión /*Conexión a la base de datos*/
    
include("db.php");

/*Confirmación y obtención de datos*/

if (isset($_POST['Salvar'])){

    $usuarior=$_POST['usuarior'];
    $emailr=$_POST['emailr'];
    $passr=$_POST['passr'];

    //registrar /*sentencia de consulta para insertar datos*/


    $sql = "INSERT INTO cliente (Usuario, Correo, Contraseña) VALUES ('$usuarior','$emailr','$passr')";
    $result = mysqli_query($connect, $sql);

/*confirmación de funcionamiento*/
    if(!$result)
    {
        die("Error al registrar los datos".mysqli_error($connect));
    }

   header("Location :nombredelapaginaservicios.html");
  
}

?>