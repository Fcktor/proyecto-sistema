<?php
  include("php/conexion.php");
  date_default_timezone_set("America/Lima");


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Página Principal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <title>Khopy Plaza</title>
  </head>
  <body>
  <section class="vh-100"> Fecha:<?php echo date(" d-m-Y"); ?> Hora: <?php echo date("H:i:s A"); ?>
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100 mi-fondo">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="img/khopy-main.png"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
       
          

          

          <!-- Email input -->

    <form action="" method="POST">
       <?php

           if(isset($errorLogin)){
                echo $errorLogin;
            }

       ?>
       <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Ingrese a Khopy plaza</p>
          </div>
        <div class="form-outline mb-4">
            <input type="text" name="username" class="form-control form-control-lg"
              placeholder="Ingresar nombre de usuario" />
            <label class="form-label" for="form3Example3">Nombre de usuario</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" name="password" class="form-control form-control-lg"
              placeholder="Ingresar contraseña" />
            <label class="form-label" for="form3Example4">Contraseña</label>
          </div>

          <!--<div class="d-flex justify-content-between align-items-center">
            <Checkbox 
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Recordarme
              </label>
            </div>
            <a href="#!" class="text-body">¿Olvidaste tu contraseña?</a>
          </div> -->

          <div class="text-center text-lg-start mt-4 pt-2">
            <input type="submit" value="Iniciar Sesión">
            <p class="small fw-bold mt-2 pt-1 mb-0">¿No tienes una cuenta? <a href="#!"
                class="link-danger">Registrar</a></p>
          </div>
    </form>
          
      </div>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2022. All rights reserved.
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="#!" class="text-white">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
    <!-- Right -->
  </div>
</section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    
  </body>
</html>