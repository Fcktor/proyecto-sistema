<?php
  include("../php/conexion.php");
  $cod = $_GET["cod"];
  $users = "SELECT * FROM users WHERE cod_user = '$cod'";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Modificar Usuario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="mainusuarios.css">
    <title>Khopy Plaza</title>
  </head>
  <body>
    
    <div class="container-fluid">
      <div class="row flex-nowrap">
          
          <div class="col-8"> <!--Aquí va el contenido -- class col py-3-->
            <!--Barra de Navegazao-->
            
            <!--Formulario-->
            <div class="container-add">
              
              
              <form class="container-tabla container_tabla_modificar" action="procesar_editar.php" method="post">
                <div class="titulo-tabla titulo-tabla-edit">Datos del Usuario </div>
                <div class="tabla-header">#</div>
                <div class="tabla-header">ID Usuario</div>
                <div class="tabla-header">Rol</div>
                <div class="tabla-header">DNI</div>
                <div class="tabla-header">Nombre</div>
                <div class="tabla-header">Teléfono</div>
                <div class="tabla-header">Operación</div>
                <?php $resultado = mysqli_query($conexion, $users);
                while($row=mysqli_fetch_assoc($resultado)) { ?>
                <input type="text"  class="tabla-input" value="<?php echo $row["cod_user"];?>" name="cod">
                <input type="text" class="tabla-input" value="<?php echo $row["username"];?>" name="username">
                <input type="text" class="tabla-input" value="<?php echo $row["rol_user"];?>" name="rol">
                <input type="text" class="tabla-input" value="<?php echo $row["dni_persona"];?>" name="dni">
                <input type="text" class="tabla-input" value="<?php echo $row["nombre"];?>" name="nombre">
                <input type="text" class="tabla-input" value="<?php echo $row["telef_persona"];?>" name="telef_persona">
                <?php } mysqli_free_result($resultado) ?>
                <input type="submit" value="Actualizar" class="boton-actualizar">
                </form>

              
            </div>

          </div>
          <div class="col-6">
            
            
          </div>       
      </div>
      
  </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    
  </body>
</html>