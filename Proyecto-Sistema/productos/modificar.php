<?php
  include("../php/conexion.php");
  $productos = "SELECT * FROM productos";
  session_start();
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
          <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
              <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                  <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <img src="../img/logokhopy.png" onclick="location.reload()">
                  </a>
                  <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                  <li class="nav-item">
                          <a href="../index.php" class="nav-link px-0 align-middle text-white navbar-brand">
                              <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Inicio</span>
                          </a>
                      </li>

                     
                     

                      <li>
                          <a href="../users/usuarios.php" class="nav-link px-0 align-middle text-white navbar-brand">
                              <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Usuarios</span></a>
                      </li>
                      <li>
                          <a href="../productos/productos.php" class="nav-link px-0 align-middle text-info navbar-brand">
                              <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline" id="texto">Productos</span></a>
                      </li>

                      <li>
                          <a href="../pedidos/pedidos.php" class="nav-link px-0 align-middle text-white navbar-brand">
                              <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Pedidos</span></a>
                      </li>

                      <li>
                          <a href="../categorias/categorias.php" class="nav-link px-0 align-middle text-white navbar-brand">
                              <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Categorías</span></a>
                      </li>

                      <li>
                          <a href="../marcaproductos/marcaproductos.php" class="nav-link px-0 align-middle text-white navbar-brand">
                              <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Marca Productos</span></a>
                      </li>

                      <li>
                          <a href="../marcasociedad/marcasociedad.php" class="nav-link px-0 align-middle text-white navbar-brand">
                              <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Marca Sociedad</span></a>
                      </li>

                      <li>
                          <a href="../reportes/reportes.php" class="nav-link px-0 align-middle text-white navbar-brand">
                              <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Reportes</span></a>
                      </li>
                      <h4> Fecha:<?php echo date(" d-m-Y"); ?> Hora: <?php echo date("H:i:s A");?></h4>
                  </ul>
                  <hr>
                  <div class="dropdown pb-4">
                      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                          <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="img-fluid">
                          <span class="d-none d-sm-inline mx-1"><?php
                        
                        echo "Usuario: ".$_SESSION['variable']; ?></span>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                          
                          <li><a class="dropdown-item" href="#">Sign out</a></li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col-8"> <!--Aquí va el contenido -- class col py-3-->
            <!--Barra de Navegazao-->
            
            <!--Formulario-->
            <div class="container-add">
              
              
              <div class="container-tabla container-producto_modificar">
                <div class="titulo-tabla titulo-producto_edit">Datos del Producto</div>
                <div class="tabla-header">#</div>
                <div class="tabla-header">Título de producto</div>
                <div class="tabla-header">Descripción</div>
                <div class="tabla-header">Precio de separación</div>
                <div class="tabla-header">Precio producto</div>
                <div class="tabla-header">Stock Now</div>
                <div class="tabla-header">Stock Min</div>
                <div class="tabla-header">Imagen de producto</div>
                <div class="tabla-header">Código de marca sociedad</div>
                <div class="tabla-header">Código de marca producto</div>
                <div class="tabla-header">Código categoría</div>
                <div class="tabla-header">Operación</div>
                <?php $resultado = mysqli_query($conexion, $productos);
                while($row=mysqli_fetch_assoc($resultado)) { ?>
                <div class="tabla-item"><?php echo $row["cod_prod"];?></div>
                <div class="tabla-item"><?php echo $row["title_prod"];?></div>
                <div class="tabla-item"><?php echo $row["descrip_prod"];?></div>
                <div class="tabla-item"><?php echo $row["precio_separacion_prod"];?></div>
                <div class="tabla-item"><?php echo $row["precio_prod"];?></div>
                <div class="tabla-item"><?php echo $row["stock_now"];?></div>
                <div class="tabla-item"><?php echo $row["stock_min"];?></div>
                <div class="tabla-item"><img height="25px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen_producto']); ?>"/></div>
                <div class="tabla-item"><?php echo $row["cod_marca_s"];?></div>
                <div class="tabla-item"><?php echo $row["cod_marca_p"];?></div>
                <div class="tabla-item"><?php echo $row["cod_categ"];?></div>
                <div class="tabla-item">
                    <a href="editar.php?cod=<?php echo $row["cod_prod"];?>" class="tabla-item-link">Editar</a> -
                    <a href="eliminar.php?cod=<?php echo $row["cod_prod"];?>" class="tabla-item-link">Eliminar</a>
                </div>
                <?php } mysqli_free_result($resultado) ?>
              </div>
              
              
            </div>

            
          </div>
          <div class="col-6">
            
            
          </div>       
      </div>
      
  </div>
  <script src="../js/confirmacion.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    
  </body>
</html>