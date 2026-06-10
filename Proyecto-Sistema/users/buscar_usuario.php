<?php


  include("../php/conexion.php");

  $busqueda = strtolower($_REQUEST['busqueda']);
              if(empty($busqueda)) {
                header("location: usuarios.php");
              }

  $like = "%$busqueda%";
  $stmt_busq = mysqli_prepare($conexion, "SELECT * FROM USERS WHERE (USERNAME LIKE ? OR COD_USER LIKE ? OR ROL_USER LIKE ? OR NOMBRE LIKE ?) ORDER BY COD_USER ASC");
  mysqli_stmt_bind_param($stmt_busq, "ssss", $like, $like, $like, $like);
  mysqli_stmt_execute($stmt_busq);
  $sql_registro = mysqli_stmt_get_result($stmt_busq);

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
    <link rel="stylesheet" href="mainusuarios.css">
    <title>Khopy Plaza</title>
  </head>
  <body>
    
    <div class="container-fluid">
      <div class="row flex-nowrap mi-estilo">
          <div class="col-2 col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
              <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                  <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <img src="../img/logokhopy.png" onclick="location.reload()">
                  </a>
                  <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                      <li class="nav-item">
                          <a href="../index.php" class="nav-link align-middle px-0 text-white navbar-brand">
                              <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Inicio</span>
                          </a>
                      </li>
                      
                      <li>
                          <a href="usuarios.php" class="nav-link align-middle px-0 text-white navbar-brand">
                              <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline" id="texto">Usuarios</span></a>
                      </li>

                      <li>
                          <a href="../productos/productos.php" class="nav-link align-middle px-0 text-white navbar-brand">
                              <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Productos</span></a>
                      </li>

                      <li>
                          <a href="../pedidos/pedidos.php" class="nav-link align-middle px-0 text-white navbar-brand">
                              <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Pedidos</span></a>
                      </li>

                      <li>
                          <a href="../categorias/categorias.php" class="nav-link align-middle px-0 text-white navbar-brand">
                              <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Categorías</span></a>
                      </li>

                      <li>
                          <a href="../marcaproductos/marcaproductos.php" class="nav-link align-middle px-0 text-white navbar-brand">
                              <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Marca Productos</span></a>
                      </li>

                      <li>
                          <a href="../marcasociedad/marcasociedad.php" class="nav-link align-middle px-0 text-white navbar-brand">
                              <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Marca Sociedad</span></a>
                      </li>

                      <li>
                          <a href="../reportes/reportes.php" class="nav-link align-middle px-0 text-white navbar-brand">
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
          <div class="col-10"> <!--Aquí va el contenido -- class col py-3-->
            <!--Barra de Navegazao-->
            <?php 

              $busqueda = strtolower($_REQUEST['busqueda']);
              if(empty($busqueda)) {
                header("location: usuarios.php");
              }


            ?> 
            <nav class="navbar navbar-dark bg-dark">
              <div class="container-fluid">
                <a class="navbar-brand">Navbar</a>
                <form class="d-flex" action="buscar_usuario.php" method="get">
                  <input class="form-control me-2" type="text" placeholder="Buscar" name="busqueda" aria-label="Search" value="<?php echo $busqueda; ?>">
                  <button class="btn btn-outline-success" type="submit" name="enviar">Search</button>
                </form>
              </div>
            </nav>

            <!--Formulario-->
          
                

              
              <div class="container-tabla container-buscarusuario">
                <div class="titulo-tabla titulo-buscarusuario">Datos del Usuario <a href="modificar.php" class="title-edit">Modificar</a></div>
                <div class="tabla-header">#</div>
                <div class="tabla-header">ID Usuario</div>
                <div class="tabla-header">Rol</div>
                <div class="tabla-header">DNI</div>
                <div class="tabla-header">Nombre</div>
                <div class="tabla-header">Teléfono</div>
                <div class="tabla-header">Operación</div>
                <?php while($row=mysqli_fetch_assoc($sql_registro)) { ?>
                <div class="tabla-item"><?php echo $row["cod_user"];?></div>
                <div class="tabla-item"><?php echo $row["username"];?></div>
                <div class="tabla-item"><?php echo $row["rol_user"];?></div>
                <div class="tabla-item"><?php echo $row["dni_persona"];?></div>
                <div class="tabla-item"><?php echo $row["nombre"];?></div>
                <div class="tabla-item"><?php echo $row["telef_persona"];?></div>
                <div class="tabla-item">
                    <a href="editar.php?cod=<?php echo $row["cod_user"];?>" class="tabla-item-link">Editar</a> -
                    <a href="eliminar.php?cod=<?php echo $row["cod_user"];?>" class="tabla-item-link">Eliminar</a>
                </div>
                <?php } mysqli_free_result($sql_registro); mysqli_stmt_close($stmt_busq); ?>
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