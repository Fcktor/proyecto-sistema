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
    <title>Productos - Clientes</title>
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

                      <!-- 

                      <li>
                          <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white navbar-brand ">
                              <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Pedidos</span></a>
                          <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                              <li class="w-100">
                                  <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">...</span> 1</a>
                              </li>
                              <li>
                                  <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">...</span> 2</a>
                              </li>
                          </ul>
                      </li>



                      <li>
                          <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white navbar-brand">
                              <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Reportes</span> </a>
                              <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                              <li class="w-100">
                                  <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 1</a>
                              </li>
                              <li>
                                  <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 2</a>
                              </li>
                              <li>
                                  <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 3</a>
                              </li>
                              <li>
                                  <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 4</a>
                              </li>
                          </ul>
                      </li>
                      -->
                      
                      
                      
                  </ul>
                  <hr>
                  <div class="dropdown pb-4">
                      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                          <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="img-fluid">
                          <span class="d-none d-sm-inline mx-1"><?php
                        
                        echo "Usuario: ".$_SESSION['variable']; ?></span>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                          <li><a class="dropdown-item" href="../logout.php">Sign out</a></li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col-8"> <!--Aquí va el contenido -- class col py-3-->
            <!--Barra de Navegazao-->
            
            <!--Formulario-->
            
            <div class="container-add">
              <form action="insertar.php" method="post" enctype="multipart/form-data"> <!--id="formulario" method="POST" -->
                <h1 class="container-title">Registar Producto</h1>
                  <div class="container-form">
                    <label for="txt_tit" class="form-label">Título del producto:</label>
                    <input type="text" class="form-control" id="txt_tit" name="titulo_prod" placeholder="Ingresar nombre del producto">
                    <label for="txt_desc" class="form-label">Descripción del producto:</label>
                    <input type="text" class="form-control" id="txt_desc" name="desc_prod" placeholder="Descripción">
                    <label for="txt_preciosep" class="form-label">Precio de separación:</label>
                    <input type="text" class="form-control" id="txt_preciosep" name="precio_sep" placeholder="Precio de separación">
                    <label for="txt_preciopro" class="form-label">Precio del producto:</label>
                    <input type="text" class="form-control" id="txt_preciopro" name="precio_pro" placeholder="Precio del producto">
                    <label for="txt_stockn" class="form-label">Stock now:</label>
                    <input type="text" class="form-control" id="txt_stockn" name="stock_n" placeholder="Stock de ahora">
                    <label for="txt_stockm" class="form-label">Stock mínimo:</label>
                    <input type="text" class="form-control" id="txt_stockm" name="stock_m" placeholder="Stock mínimo">
                    <label for="txt_marca_s" class="form-label">Código de marca sociedad:</label>
                    <input type="text" class="form-control" id="txt_marca_s" name="cod_marca_s" placeholder="Código marca sociedad">
                    <label for="txt_marca_p" class="form-label">Código de marca producto:</label>
                    <input type="text" class="form-control" id="txt_marca_p" name="cod_marca_p" placeholder="Código marca producto">
                    <label for="txt_codcateg" class="form-label">Código de categoría:</label>
                    <input type="text" class="form-control" id="txt_codcateg" name="cod_categ" placeholder="Código categoría">
                    <label for="txt_imagen" class="form-label">Imagen:</label>
                    <input type="file" class="form-control" id="txt_imagen" name="imagen" placeholder="">
                    <button type="submit" class="btn btn-outline-secondary btn-add" >Registrar</button>
                    
                  </div>
              </form>
              <div>
                
              </div>
              <div class="container-tabla">
                <div class="titulo-tabla">Datos del Producto <a href="modificar.php" class="title-edit">Modificar</a></div>
                <div class="tabla-header">#</div>
                <div class="tabla-header">Título de producto</div>
                <div class="tabla-header">Descripción</div>
                <div class="tabla-header">Precio de separación</div>
                <div class="tabla-header">Precio producto</div>
                <div class="tabla-header">Stock Now</div>
                <div class="tabla-header">Stock Min</div>
                <div class="tabla-header">Imagen Producto</div>
                <div class="tabla-header">Código de marca sociedad</div>
                <div class="tabla-header">Código de marca producto</div>
                <div class="tabla-header">Código categoría</div>
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
                <?php } mysqli_free_result($resultado) ?>
              </div>
             
            </div>

          
            
              
          </div>
          <div class="col-6">
            
            
          </div>       
      </div>
      
  </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    
  </body>
</html>