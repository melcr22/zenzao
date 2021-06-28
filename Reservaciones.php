<?php include("db.php") ?> <!--link que relaciona php y la conexion a la BD-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css"> 
    <title>Document</title>
    <link rel="stylesheet" href="css/Reservaciones.css"> <!--link de la hoja de estilo css-->
    <!--link de Boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>

<header>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <div class = "logo"><a href="index.html"><img id= "imglogo" src ="imagenes/logonav.png"></a>
            <div class ="box"></div>
          </div>
         
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a id="serviciosbtn"class="nav-link active" aria-current="page" href="Servicios.html">Servicios</a>
              </li>
              <li class="nav-item">
                <a id="reservasbtn"class="nav-link" href="Reservaciones.php">Reservas</a>
              </li>
              <li class="nav-item">
                <a id="mebresiasbtn"class="nav-link" href="membresias.html">Membresías</a>
              </li>
              <li class="nav-item">
                <a id= "loginbtn" class="nav-link" href="login.php">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</header>
<div class="backg"> <!--Resguarda el fondo de la pagina y sirve como el contenedr supremo -->

<div class="contenedor"> <!--contenedor para guardar el formulario y la tabla-->
    <div class="box-reserv">  <!--contenedor que guarda al formulario-->
        <h3>Haz tu reservación</h3>

        <!--código de php para el mensaje de inserción de datos en la tabla-->
      <?php if(isset($_SESSION['mensaje'])) {?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?=$_SESSION['mensaje'] ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
      <?php } ?> 

      <!--Formulario que también indica la relación del archivo php y el envío de datos-->
  <form action="Reservas.php" method="POST" class="row gx-"4>
    
    <div class="input-group mb-2">
        <input type="text" name="Nom" class="form-control" placeholder="Nombre y Apellido" required>
        <!--Estas partes de span con código extenso son los íconos-->
        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
        </svg></span>
        <input type="text" name="Tel" class="form-control" placeholder="Teléfono" aria-label="">
      </div>

      <div class="input-group mb-2">
        <input type="email" name="Correo" class="form-control" placeholder="email" required>
        <span class="input-group-text" id="email">Correo Electrónico</span>
      </div>

      
      <div class="input-group mb-2">
        <span class="input-group-text">Fecha</span>
        <input type="date" name="Fecha" class="form-control" id="fecha" placeholder="dd/mm/yy">
      </div>
      
      <div class="input-group mb-2">
        <span class="input-group-text">hh</span>
        <input type="time" name="Hora" class="form-control" placeholder="Hora">
        <span class="input-group-text">ss</span>
      </div>
      
      
      
      <div class="input-group mb-2">
        <span class="input-group-text">Servicio deseado</span>
        <textarea name="Serv" class="form-control" aria-label="With textarea"></textarea>
      </div>


      <div class="input-group mb-3">
        <input type="number" name="Numper" class="form-control" placeholder="cantidad de personas">
          <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
          <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
          <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
          <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
      </svg></span>
     

      <select name="Edad" class="form-select" aria-label="Default select example">
          <option selected>Edad</option>
          <option value="Adultos(+18)">Adultos(+18)</option>
          <option value="Niños(-18)">Niños (-18)</option>
          <option value="Niños y Adultos">Niños y Adultos</option>
      </select> 
      </div>
    
      <div class="col-auto">
        <button name="enviar" type="submit" class="btn btn-outline-light">Reservar</button>
      </div>
  </form>     
</div>
 
<!--Aquí se le da comienzo al código de la tabla-->

<div class="container"> <!--contenedor de la tabla-->
    <div class="col">
      <table class="table table-bordered" style="position:relative;"> <!--definición del tipo de tabla y posición-->

       <thead>  <!--agrupa los encabezados de la tabla-->
          <tr> <!--define una fila-->
            <th>Nombre</th> <!--th define celdas pero como encabezados de la tabla-->
            <th>Teléfono</th>
            <th>Correo Electrónico</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Servicio</th>
            <th>Cantidad de personas</th>
            <th>Edad</th>
            <th>Eliminar</th>
          </tr> 
        </thead>
     
        <tbody> <!--Este agrupa el contenido o el cuerpo de la tabla-->
        <!--la conexión y consulta a la tabla y mysql para obtener los datos-->
          <?php
          $query = "SELECT * FROM reservaciones";
          $result_reserv = mysqli_query($connect, $query);

          while($row = mysqli_fetch_array($result_reserv)) { ?>
           
          <tr>
              <!--Códigos para mostrar los datos de mysql en la tabla-->
              <td><?php echo $row['Nombre'] ?></td> <!--td define las celdas-->
              <td><?php echo $row['Telefono'] ?></td>
              <td><?php echo $row['Correo_electronico'] ?></td>
              <td><?php echo $row['fecha'] ?></td>
              <td><?php echo $row['Hora'] ?></td>
              <td><?php echo $row['Servicio'] ?></td>
              <td><?php echo $row['Cantidad_de_personas'] ?></td>
              <td><?php echo $row['Edad'] ?></td>
              <td>
               
              <!--link que permitirá eliminar datos ingresados-->
                  <a href="delete_reserva.php?id=<?php echo $row['Id']?>"class="btn btn-secondary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                  </svg>
                  </a>
               
              </td>

          </tr>

            <?php } ?>

        </tbody>
      </table>
    </div>
</div>
    
 </div>
</div>

<footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </footer>
                
</body>
</html>
                                                  <!--Cierre-->
