<?php
  include("../php/conexion.php");
  $cod = $_GET["cod"];
  $marca = "SELECT * FROM marca_sociedad WHERE cod_marca_s = '$cod'";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Modificar Marca Sociedad</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="mainmarcaso.css">
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
                <div class="titulo-tabla titulo-tabla-edit">Datos de Marca Sociedad</div>
                <div class="tabla-header">#</div>
                <div class="tabla-header">Descripción de Marca Sociedad</div>
                <div class="tabla-header">Teléfono</div>
                <div class="tabla-header">Dirección</div>
                <div class="tabla-header">RUC</div>
                <div class="tabla-header">Operación</div>
                <?php $resultado = mysqli_query($conexion, $marca);
                while($row=mysqli_fetch_assoc($resultado)) { ?>
                <input type="text"  class="tabla-input" value="<?php echo $row["cod_marca_s"];?>" name="cod">
                <input type="text" class="tabla-input" value="<?php echo $row["descrip_marca_s"];?>" name="desmarcas">
                <input type="text" class="tabla-input" value="<?php echo $row["telef_marca_s"];?>" name="telmarcas">
                <input type="text" class="tabla-input" value="<?php echo $row["direccion_marca_s"];?>" name="dirmarcas">
                <input type="text" class="tabla-input" value="<?php echo $row["ruc"];?>" name="ruc">
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