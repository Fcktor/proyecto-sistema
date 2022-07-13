<?php
  include("../php/conexion.php");
  $cod = $_GET["cod"];
  $producto = "SELECT * FROM productos WHERE cod_prod = '$cod'";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Modificar Productos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <title>Khopy Plaza</title>
  </head>
  <body>
    
    <div class="container-fluid">
      <div class="row flex-nowrap">
          
          <div class="col-8"> <!--Aquí va el contenido -- class col py-3-->
            <!--Barra de Navegazao-->
            
            <!--Formulario-->
            <div class="container-add">
              
              
              <form class="container-tabla container_tabla_modificar" action="procesar_editar.php" method="post" enctype="multipart/form-data">
                <div class="titulo-tabla titulo-tabla-edit">Datos del Producto </div>
                <div class="tabla-header">#</div>
                <div class="tabla-header">Título de producto</div>
                <div class="tabla-header">Descripción</div>
                <div class="tabla-header">Precio de separación</div>
                <div class="tabla-header">Precio producto</div>
                <div class="tabla-header">Stock Now</div>
                <div class="tabla-header">Stock Min</div>
                <div class="tabla-header">Imagen producto</div>
                <div class="tabla-header">Código de marca sociedad</div>
                <div class="tabla-header">Código de marca producto</div>
                <div class="tabla-header">Código categoría</div>
                <div class="tabla-header">Operación</div>
                <?php $resultado = mysqli_query($conexion, $producto);
                while($row=mysqli_fetch_assoc($resultado)) { ?>
                <input type="text"  class="tabla-input" value="<?php echo $row["cod_prod"];?>" name="cod">
                <input type="text" class="tabla-input" value="<?php echo $row["title_prod"];?>" name="titulo">
                <input type="text" class="tabla-input" value="<?php echo $row["descrip_prod"];?>" name="descripcion">
                <input type="text" class="tabla-input" value="<?php echo $row["precio_separacion_prod"];?>" name="precioseparacion">
                <input type="text" class="tabla-input" value="<?php echo $row["precio_prod"];?>" name="precioproducto">
                <input type="text" class="tabla-input" value="<?php echo $row["stock_now"];?>" name="stocknow">
                <input type="text" class="tabla-input" value="<?php echo $row["stock_min"];?>" name="stockmin">
                
                <input type="file" required name="imagen" class="input-group-text">
                <input type="text" class="tabla-input" value="<?php echo $row["cod_marca_s"];?>" name="codmarcas">
                <input type="text" class="tabla-input" value="<?php echo $row["cod_marca_p"];?>" name="codmarcap">
                <input type="text" class="tabla-input" value="<?php echo $row["cod_categ"];?>" name="codcateg">

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