<?php
  include("../php/conexion.php");
  $pedidos = "SELECT * FROM pedidos";
  session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Registrar Usuario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="mainpedido.css">
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
                          <a href="../productos/productos.php" class="nav-link px-0 align-middle text-white navbar-brand">
                              <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Productos</span></a>
                      </li>

                      <li>
                          <a href="pedidos.php" class="nav-link px-0 align-middle text-info navbar-brand">
                              <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline"  id="texto"">Pedidos</span></a>
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
              <form action="insertarpedido.php" method="post"> <!--id="formulario" method="POST" -->
                <h1 class="container-title">Registar Pedido</h1>
                  <div class="container-form">
                    <label for="txt_monto_p" class="form-label">Monto total del pedido:</label>
                    <input type="text" class="form-control" id="txt_monto_p" name="montototal" placeholder="Monto total" name="montototal">
                    <label for="txt_cod_p" class="form-label">Código de producto:</label>
                    <input type="text" class="form-control" id="txt_cod_p" name="codprod" placeholder="Código producto" name="codprod">
                    <label for="txt_cod_usuario" class="form-label">Código de Usuario:</label>
                    <input type="text" class="form-control" id="txt_cod_usuario" name="coduser" placeholder="Código de usuario" name="coduser">
                    <label for="txt_fechapedido" class="form-label">Fecha de entrega:</label>
                    <input type="date" class="form-control" id="txt_fechapedido" name="fecha" placeholder="Fecha de pedido" name="fecha">
                    <button type="submit" class="btn btn-outline-secondary btn-add" >Registrar</button>
                    
                  </div>
              </form>
              <div>
                
              </div>
              <div class="container-tabla">
                <div class="titulo-tabla">Datos del Pedido<a href="modificarpedido.php" class="title-edit">Modificar</a></div>
                <div class="tabla-header">#</div>
                <div class="tabla-header">Monto total del pedido</div>
                <div class="tabla-header">Código de producto</div>
                <div class="tabla-header">Código de Usuario</div>
                <div class="tabla-header">Fecha de entrega</div>
               
                <?php $resultado = mysqli_query($conexion, $pedidos);
                while($row=mysqli_fetch_assoc($resultado)) { ?>
                <div class="tabla-item"><?php echo $row["cod_pedid"];?></div>
                <div class="tabla-item"><?php echo $row["monto_total_ped"];?></div>
                <div class="tabla-item"><?php echo $row["cod_prod"];?></div>
                <div class="tabla-item"><?php echo $row["cod_user"];?></div>
                <div class="tabla-item"><?php echo $row["fecha_entrega"];?></div>
                
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