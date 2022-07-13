<?php
  include("../php/conexion.php");
  include("cifrado.php");

  $cod = isset($_GET['cod']) ? $_GET['cod'] : '';
  $token = isset($_GET['token']) ? $_GET['token'] : '';

  if($cod == '' or $token == '') {
      echo 'Error al procesar la petición';
      exit;
  } else {

    $token_tmp = hash_hmac('sha1', $cod, KEY_TOKEN);

    if($token == $token_tmp){

      $productomostrar= ("SELECT * FROM productos where cod_prod = $cod");
      

    } else {
      echo 'Error al procesar la peticiónss';
      exit;
    }
  }
  session_start();


  
  
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
                          <a href="productos-clientes.php" class="nav-link align-middle px-0 text-info navbar-brand">
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
                          <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
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
                
                    <div class="container">
                        <div class="row">
                            <div class="card shadow-sm">
   
                                <div class="col-md-6 order-md-1">
                                <img height="200px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen_producto']); ?>"/>
                                </div>
                                <div class="col-md-6 order-md-2">
                                  <h2><?php echo $row["title_prod"];?></h2>
                                  <h4><?php echo $row["descrip_prod"];?></h4>
                                  <p class="">Precio: <?php echo number_format($row["precio_prod"], 2, '.', ',');?> Soles</p>
                                  <p class="">Precio de separación: <?php echo number_format($row["precio_separacion_prod"], 2, '.', ',');?> Soles</p>
                                  <p class="">Stock actual: <?php echo $row["stock_now"];?> Unidades</p>

                                  <div class="d-grid gap-3 col-10 mx-auto">
                                    <button class="btn btn-primary" type="button">Comprar ahora</button>
                                    <button class="btn btn-outline-primary" type="button" onclick="addProducto(<?php echo $cod; ?>, '<?php echo $token_tmp; ?>')">Agregar al carrito</button>

                                  </div>
                                </div>
                            </div>    
                        </div>
                    </div>



                <?php } mysqli_free_result($resultado) ?>
              

              
          </div>
      </div>
      
  </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script> 
      function addProducto(cod, token){
        let url = 'clases/carrito.php'
        let formData = new FormData()
        formData.append('cod', cod)
        formData.append('token', token)

        fetch(url, {
            method: 'POST',
            body: formData,
            mode: 'cors'
        }).then(response => response.json())
        .then(data => {
          if(data.ok){
            let elemento = document.getElementById("num_cart")
            elemento.innerHTML = data.numero
          }
        })
      }
    </script> 
    
  </body>
</html>