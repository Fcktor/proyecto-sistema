<?php
  include("../php/conexion.php");
  $cod = $_GET["cod"];
  $pedido = "SELECT * FROM pedidos WHERE cod_pedid = '$cod'";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Modificar Pedido</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="mainpedido.css">
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
                <div class="titulo-tabla titulo-tabla-edit">Datos del Pedido </div>
                <div class="tabla-header">#</div>
                <div class="tabla-header">Monto total del pedido</div>
                <div class="tabla-header">Código de producto</div>
                <div class="tabla-header">Código de Usuario</div>
                <div class="tabla-header">Fecha de entrega</div>

                <div class="tabla-header">Operación</div>
                <?php $resultado = mysqli_query($conexion, $pedido);
                while($row=mysqli_fetch_assoc($resultado)) { ?>
                <input type="text"  class="tabla-input" value="<?php echo $row["cod_pedid"];?>" name="cod">
                <input type="text" class="tabla-input" value="<?php echo $row["monto_total_ped"];?>" name="montototal">
                <input type="text" class="tabla-input" value="<?php echo $row["cod_prod"];?>" name="codprod">
                <input type="text" class="tabla-input" value="<?php echo $row["cod_user"];?>" name="coduser">
                <input type="date" class="tabla-input" value="<?php echo $row["fecha_entrega"];?>" name="fecha">
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