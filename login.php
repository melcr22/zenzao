<?php include("db.php") ?> <!--link que relaciona php y la conexion a la BD-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/login.css">  <!--link de la hoja de estilo css-->
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
     <div class="backg">  <!--Resguarda el fondo de la pagina y sirve como el contenedr supremo -->

  
        <div class="box-login">
            <div class="inner-box">
                <div class="front">
                    <h2>Login</h2>
                    <form>  <!--formulario y cada caja de texto para ingresar los contenidos y botón de envíado-->
                        <input type="text" name="usuariol" class="input-box" placeholder="Usuario" required>
                        <input type="password" name="passl" class="input-box" placeholder="Contraseña" required>
                        <button type="submit" class="btn btn-outline-light">Enviar</button>
                        <input name="" class="form-check-input" type="checkbox" id="span">
                        <label class="form-check-label" for="Span">Remember Me</label>
                    </form>
                   
                    <a href="empleados/index.php">Trabajas con nosotros?</a>
                </div>
            </div>
        </div>

          
        <div class="box-registrer">
            <div class="inner-box">
                <div class="back">
                    <h2>Registrer</h2>
                    <!--formulario con la acción de enviar información-->
                    <form action="Registrar.php" method="POST">
                        <input type="text" name="usuarior" class="input-box" placeholder="Usuario">
                        <input type="email" name="emailr" class="input-box" placeholder="email"> 
                        <input type="password" name="passr" class="input-box" placeholder="Contraseña">
                        <button type="submit" name="Salvar" class="btn btn-outline-light" value="Salvar">Enviar</button>
                        <input name="" class="form-check-input" type="checkbox" id="span2">
                        <label class="form-check-label" for="Span2">Remember Me</label>
                    </form>
                
                </div>
            </div>
        </div>
    
    
    
    
    </div>

 

</body>
</html>
                                                <!--Cierre-->