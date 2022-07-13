<?php
  include("../php/conexion.php");
  include("cifrado.php");
  session_start();


  $productomostrar= ("SELECT * FROM productos");
  
?>

<?php


date_default_timezone_set("America/Lima");


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <title>Khopy Plaza</title>
  </head>
  <body>
    
    <div class="container-fluid">
      <div class="row flex-nowrap mi-estilo">
          <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
              <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                  <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <img src="../img/logokhopy.png" onclick="location.reload()">
                  </a>
                  <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                  <li class="nav-item">
                          <a href="index.php" class="nav-link align-middle px-0 text-info navbar-brand">
                              <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline"  id="texto"> Inicio </span>
                          </a>
                      </li>
                      
                      
                      

                      
                      <li>
                        <h4> Fecha:<?php echo date(" d-m-Y"); ?> Hora: <?php echo date("H:i:s A");?></h4>
                      </li>

                    
                  </ul>
                  <hr>
                  <div class="dropdown pb-4">
                      <a  class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                          <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="img-fluid">
                          <span class="d-none d-sm-inline mx-1" > <?php
                        
                        echo "Usuario: ".$_SESSION['variable']; ?></span>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                          
                          <li>
                              <!-- <hr class="dropdown-divider"> -->
                          </li>
                          <li><a class="dropdown-item" href="../logout.php">Sign out</a></li>
                      </ul>
                  </div>
              </div>
          </div>

          <div class="col-10">
            <nav class="navbar navbar-dark bg-dark">
              <div class="container-fluid">
                  <a class="navbar-brand color">Navbar</a>
                  <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
                  <a href="clases/carrito.php" class="btn btn-primary">Carrito<span id="num_cart" class="badge bg-secondary"></span></a>
              </div>
            </nav>
            
             
                
                <?php $resultado = mysqli_query($conexion, $productomostrar);
                while($row=mysqli_fetch_assoc($resultado)) { ?>
                
                    <div class="col-5 disp">
                        <div class="card shadow-sm">
                                <div class="card-text"><img height="200px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen_producto']); ?>"/></div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row["title_prod"];?></h5>
                                <p class="card-text">Precio: <?php echo number_format($row["precio_prod"], 2, '.', ',');?> Soles</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="producto-detalle.php?cod=<?php echo $row['cod_prod']; ?>&token=<?php echo hash_hmac('sha1', $row['cod_prod'], KEY_TOKEN); ?>" 
                                        class="btn btn-primary">Detalles</a>
                                    </div>
                                    <a href="#" class="btn btn-success">Agregar</a>
                                </div>
                            </div>
                        </div>
                    </div>



                <?php } mysqli_free_result($resultado) ?>
              

              
          </div>
      </div>
      
  </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    
  </body>
</html>