<?php include("db.php"); ?>

<?php include("includes/header.php"); ?>

<!-- CONTAINER REGISTRAR--> 

<div class="container" >
    
       <br> <h2> Registro de Empleados </h2> </br>

       <div class="card card-body" >

<!-- FORMULARIO CON DONDE SE VA A ENVIAR-->

       <form action = "registrar.php" method = "POST">

       <!--MENSAJE DE ALERTA -->

<?php if (isset($_SESSION['message'])) { ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <?=$_SESSION['message'] ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php session_unset(); }  ?>

<!-- CLASE DE FILA PARA EL FORMULARIO-->

<div class="row"> 

  <div class="col-md-4">
 <label for="inputCedula" class="form-label">Cedula</label>
    <input type= "text" class="form-control" id="inputCedula"  name= "Cedula" required >
  </div>

  <div class="col-md-4">
    <label for="inputNombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="inputNombre" name="Nombre" required >
    </div>

  <div class="col-md-4">
    <label for="" class="form-label">Apellidos</label>
    <input type="text" class="form-control" id="" name="Apellidos" required >
  </div>

  <div class="col-md-4">
    <label for="inputEdad" class="form-label">Edad</label>
    <input type="number" class="form-control" id="inputEdad" name="Edad" required >
  </div>
 

  <div class="col-md-4">
    <label for="inputCargo" class="form-label">Cargo</label>
    <input type="text" class="form-control" id="inputCargo" name="Cargo"  required >
  </div>

  

  <div class="col-md-4">
    <label for="inputDireccion" class="form-label">Direccion</label>
    <input type="adress" class="form-control" id="inputDireccion" name="Direccion" required >
  </div>
 
  <div class="col-md-4">
    <label for="inputTelefono" class="form-label">Telefono</label>
    <input type="text" class="form-control"  id="inputTelefono" name="Telefono" required>
  </div>

  <div class="col-md-4">
    <label for="inputCorreo" class="form-label">Correo Electronico </label>
    <input type="text" class="form-control" id="inputCorreo" name="Correo" required>
  </div>

  <div class="col-md-4">
    <label for= "inputEnfermedad" class="form-label">Enfermedad</label>
    <input type="text" class="form-control" id="inputEnfermedad" name="Enfermedad"required >
  </div>

</div>

  <div class="row"> 

  <div class="col-md-4">
    <label for= "inputSalario" class="form-label">Salario</label>
    <input type="text" class="form-control" id="inputSalario" name="Salario"required >
  </div>

  
  <div class="col-md-4">
    <label for= "inputServicios" class="form-label">Servicios</label>
    <select class="form-select" id="inputServicios"  name="Servicios" required>
      <option selected>Elegir...</option>
      <option>De 1 a 10 servicios </option>
      <option> De 1 a 11 servicios</option>
      <option> De de 21 a 30 servicios </option>
    </select> </div> 
  
    

  <div class="col-md-4">
    <label for= "inputComision" class="form-label">Comision</label>
    <select class="form-select" id="inputComision"  name="Comision" required>
      <option selected>Elegir...</option>
      <option>10%</option>
      <option> 20% </option>
      <option> 30%</option>
    </select> </div> 

</div
>
    <div class="row"> 


  <div class="col-md-4">
    <label for= "inputFI" class="form-label">Fecha de Ingreso </label>
    <input type="date" class="form-control" id="inputFI" name="FI"required >
  </div>
  


  <div class="col-md-4">
    <label for= "inputUsuario" class="form-label"> Usuario </label>
    <input type="text" class="form-control" id="inputUsuario" name="Usuario" required>
  </div>
  

  <div class="col-md-4">
    <label for= "inputContra" class="form-label"> Contraseña </label>
    <input type="password" class="form-control" id="inputContra" name="Contrasena"required >
  </div>

</div> 
</div>

<!-- BOTON PARA REGISTRAR EMPLEADO-->



<div class= "col-md-12">
<input type="submit" class="btn btn-success" id="boton" value="Registrar">

</div>

</div>
</div>
</div>

</form>

 
<!-- CLASE DE CSS PARA LA TABLA -->
<div class="box-grid">
<div class="col-md-8">

<table class="table" style="position:relative;"> 
<!-- NOMBRE DE LA TABLA-->
  <br>  <caption> Tabla Empleados de Zensao Spa </caption> </br>
   
  <!-- HEADER DE LA TABLA-->
  <thead>
        <tr>
          <!-- COLUMNAS QUE PERTENECEN A LA TABLA EMPLEADOS EN MYSQL-->
            <th> Cedula </th>
            <th> Nombre </th>
            <th> Apellidos </th>
            <th> Edad </th>
            <th> Cargo </th>
            <th> Direccion </th>
            <th> Telefono </th>
            <th> Correo Electronico </th>
            <th> Enfermedad </th>
            <th> Salario </th>
            <th> Servicios </th>
            <th> Comision </th>
            <th> Fecha de Ingreso </th>
            <th> Usuario </th>
            <th> Contraseña </th>
            <th> Accion </th>
        </tr>

        </thead>
        <!-- CUERPO DE LA TABLA-->
        <tbody>
          <?php 
          $sql = "SELECT * FROM empleado";
          $result_empleados= mysqli_query($conn,$sql);

          while ($row = mysqli_fetch_array($result_empleados)){   ?> 
            <tr> 

            <!-- LOS DATOS  QUE SE VAN A MOSTRAR MEDIANTE PHP-->

                <td><?php echo $row['Cedula'] ?> </td> 
                <td><?php echo $row['Nombre'] ?> </td> 
                <td><?php echo $row['Apellidos'] ?> </td> 
                <td><?php echo $row['Edad'] ?> </td> 
                <td><?php echo $row['Cargo'] ?> </td> 
                <td><?php echo $row['Direccion'] ?> </td> 
                <td><?php echo $row['Telefono'] ?> </td> 
                <td><?php echo $row['Correo_Electronico'] ?> </td> 
                <td><?php echo $row['Enfermedad_o_Alergia'] ?> </td> 
                <td><?php echo $row['Salario'] ?> </td> 
                <td><?php echo $row['Servicios'] ?> </td> 
                <td><?php echo $row['Comisión'] ?> </td> 
                <td><?php echo $row['Fecha_de_ingreso'] ?> </td> 
                <td><?php echo $row['Usuario'] ?> </td> 
                <td><?php echo $row['Contraseña'] ?> </td> 

                <td> 
                  <!-- ICOCNO PARA ELIMINAR UNA FILA DE LA TABLA-->
                    <a href="eliminar.php?id_empleados=<?php ECHO $row['id_empleados']?>"
                    class="btn btn-danger">
                    <i class="far fa-trash-alt"></i>
                    </a>

                </td>
 
            </tr>
            <?php } ?> 
         
    </tbody>
          </table >
          </div>
</div> 

<!-- PARTE DE ABAJO DEL INDEX -->
<?php include("includes/footer.php"); ?>

    