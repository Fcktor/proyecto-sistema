<?php
  include("../php/conexion.php");
  $users = "SELECT * FROM users";
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
    <link rel="stylesheet" href="../css/main.css">
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
                          <a href="../index.php" class="nav-link align-middle px-0">
                              <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Inicio</span>
                          </a>
                      </li>
                      
                      <li>
                          <a href="../users/usuarios.php" class="nav-link px-0 align-middle">
                              <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Usuarios</span></a>
                      </li>
                      <li>
                          <a href="../productos/productos.php" class="nav-link px-0 align-middle">
                              <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Productos</span></a>
                      </li>

                      <li>
                          <a href="../pedidos/pedidos.php" class="nav-link px-0 align-middle">
                              <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Pedidos</span></a>
                      </li>

                      <li>
                          <a href="../categorias/categorias.php" class="nav-link px-0 align-middle">
                              <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Categorías</span></a>
                      </li>

                      <li>
                          <a href="../marcaproductos/marcaproductos.php" class="nav-link px-0 align-middle">
                              <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Marca Productos</span></a>
                      </li>

                      <li>
                          <a href="../marcasociedad/marcasociedad.php" class="nav-link px-0 align-middle">
                              <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Marca Sociedad</span></a>
                      </li>

                      <li>
                          <a href="../reportes/reportes.php" class="nav-link px-0 align-middle">
                              <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline" id="texto">Reportes</span></a>
                      </li>

                      <!-- 

                      <li>
                          <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
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
                          <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
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
                      
                      
                      <li>
                          <a href="#" class="nav-link px-0 align-middle">
                              <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">---</span> </a>
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
              <form action="insertar.php" method="post"> <!--id="formulario" method="POST" -->
                <h1 class="container-title">Registar Usuario</h1>
                  <div class="container-form">
                    <label for="txt_idusuario" class="form-label">ID Usuario:</label>
                    <input type="text" class="form-control" id="txt_idusuarioss" name="idusuario" placeholder="Ingrese su id de usuario" name="id">
                    <label for="txt_contraseña" class="form-label">Contraseña:</label>
                    <input type="password" class="form-control" id="txt_contraseña" name="contraseña" placeholder="Ingrese su contraseña" name="contraseña">
                    <label for="txt_rol" class="form-label">Rol:</label>
                    <input type="text" class="form-control" id="txt_rol" name="rol" placeholder="Rol de usuario" name="roles">
                    <label for="txt_dni" class="form-label">DNI:</label>
                    <input type="text" class="form-control" id="txt_dni" name="dni" placeholder="XXXXXXXX" name="dni">
                    <label for="txt_nombre" class="form-label">Nombre completo:</label>
                    <input type="text" class="form-control" id="txt_nombre" name="nombre" placeholder="Nombre" name="nombre">
                    <label for="txt_tel" class="form-label">Teléfono:</label>
                    <input type="tel" class="form-control" id="txt_tel" name="tel" placeholder="Ingrese su número de teléfono" name="telefono">
                    <label for="txt_marca_s" class="form-label">Código de marca sociedad:</label>
                    <input type="text" class="form-control" id="txt_marca_s" name="marcas" placeholder="Código marca" name="telefono">
                    <button type="submit" class="btn btn-outline-secondary btn-add" >Registrar</button>
                    
                  </div>
              </form>
              <div>
                
              </div>
              <div class="container-tabla">
                <div class="titulo-tabla">Datos del Usuario <a href="modificar.php" class="title-edit">Modificar</a></div>
                <div class="tabla-header">#</div>
                <div class="tabla-header">ID Usuario</div>
                <div class="tabla-header">Rol</div>
                <div class="tabla-header">DNI</div>
                <div class="tabla-header">Nombre</div>
                <div class="tabla-header">Teléfono</div>
                <?php $resultado = mysqli_query($conexion, $users);
                while($row=mysqli_fetch_assoc($resultado)) { ?>
                <div class="tabla-item"><?php echo $row["cod_user"];?></div>
                <div class="tabla-item"><?php echo $row["idusuario"];?></div>
                <div class="tabla-item"><?php echo $row["rol_user"];?></div>
                <div class="tabla-item"><?php echo $row["dni_persona"];?></div>
                <div class="tabla-item"><?php echo $row["nombre_persona"];?></div>
                <div class="tabla-item"><?php echo $row["telef_persona"];?></div>
                <?php } mysqli_free_result($resultado) ?>
              </div>
              <!--

              <table class="table table-dark table-hover table-bordered">
                <thead>
                  
                  <tr>
                    <th scope="col"># - <a href="php/modificar.php" class="title-table">Modificar</a></th>
                    <th scope="col">ID Usuario</th>
                    <th scope="col">Rol</th>
                    <th scope="col">DNI</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Teléfono</th>
                  </tr>
                </thead>
                
                <tbody>
                  <tr>
                    
                    <td></td> 
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  
                </tbody>
                

              </table>
              -->
              
            </div>

            <!--
              <form id="formulario" method="POST">
              <div class="mb-3 mt-3">
                <h1>Registar Usuario</h1>
                <label for="txt_idusuario" class="form-label">ID Usuario:</label>
                <input type="text" class="form-control" id="txt_idusuarioss" name="txt_idusuario" placeholder="Ingrese su id de usuario" name="id">
              </div>

              <div class="mb-3">
                <label for="txt_contraseña" class="form-label">Contraseña:</label>
                <input type="password" class="form-control" id="txt_contraseña" name="txt_contraseña" placeholder="Ingrese su contraseña" name="contraseña">
              </div>

              <div class="mb-3">
                <label for="txt_rol" class="form-label">Rol:</label>
                <input type="text" class="form-control" id="txt_rol" name="txt_rol" placeholder="Rol de usuario" name="roles">
              </div>
              
              <div class="mb-3">
                <label for="txt_dni" class="form-label">DNI:</label>
                <input type="text" class="form-control" id="txt_dni" name="txt_dni" placeholder="XXXXXXXX" name="dni">
              </div>

              <div class="mb-3">
                <label for="txt_nombre" class="form-label">Nombre completo:</label>
                <input type="text" class="form-control" id="txt_nombre" name="txt_nombre" placeholder="Nombre" name="nombre">
              </div>

              <div class="mb-3">
                <label for="txt_tel" class="form-label">Teléfono:</label>
                <input type="tel" class="form-control" id="txt_tel" name="txt_tel" placeholder="Ingrese su número de teléfono" name="telefono">
              </div>

              <div class="mb-3">
                <label for="txt_marca_s" class="form-label">Código de marca sociedad:</label>
                <input type="text" class="form-control" id="txt_marca_s" name="txt_marca_s" placeholder="Código marca" name="telefono">
              </div>
              <button type="submit" class="btn btn-primary">Registrar</button>
            </form>
            -->
            
            
              
          </div>
          <div class="col-6">
            
            
          </div>       
      </div>
      
  </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    
  </body>
</html>