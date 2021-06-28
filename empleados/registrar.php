<?php
///RECIBIR TODOS ESTOS PARAMETROS 
$Cedula = $_POST['Cedula'];
$Nombre = $_POST['Nombre'];
$Apellidos = $_POST['Apellidos'];
$Edad = $_POST['Edad'];
$Cargo = $_POST['Cargo'];
$Direccion= $_POST['Direccion'];
$Telefono = $_POST['Telefono'];
$Correo = $_POST['Correo'];
$Enfermedad = $_POST['Enfermedad'];
$Salario = $_POST['Salario'];
$Servicios = $_POST['Servicios'];
$Comision = $_POST['Comision'];
$FI = $_POST['FI'];
$Usuario = $_POST['Usuario'];
$Contra= $_POST['Contrasena'];


////INCLUIR LA CONEXION CON MYSQL 

include("db.php");

////REGISTRAR LOS DATOS
$sql = "INSERT INTO empleado (id_empleados, Cedula, Nombre, Apellidos, Edad, Cargo, Direccion, Telefono, Correo_Electronico, 
Enfermedad_o_Alergia, Salario, Servicios, Comisión, Fecha_de_ingreso, Usuario, Contraseña) 
VALUES ('','$Cedula','$Nombre ','$Apellidos','$Edad ','$Cargo',
 '$Direccion','$Telefono','$Correo','$Enfermedad','$Salario','$Servicios','$Comision',' $FI','$Usuario',
 '$Contra')";
////UNION DE LA CONEXION JUNTO CON EL INSERT INTO
 $resultado = mysqli_query ($conn, $sql);


 ////MENSAJE SI FUNCIONA BIEN
 if ($resultado)
 {
    $_SESSION['message'] = 'Datos Registrados exitosamente';
    
header ('Location: index.php');
 }

 ////MENSAJE SI NO FUNCIONA
 else {
    echo "No se ejecuto $sql. " . mysqli_error($conn);
}


?> 