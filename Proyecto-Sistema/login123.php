<?php

include("php/conexion.php");

//Loginnn

if (!empty($_POST)) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    
    session_start();
    $_SESSION['username']=$username;

    $consulta="SELECT * FROM USERS WHERE USERNAME='$username' AND PASSWORD = '$password'";

    $resultado=mysqli_query($conexion, $consulta);

    $filas = mysqli_fetch_array($resultado);

    if($filas['rol_user']=='Administrador') {
        header("location: users/usuarios.php");

    }else if($filas['rol_user']=='Cliente'){
        header("location: clientes/productos-clientes.php");
    }
    
    
    else {
        ?>
        <?php
        include("login1.php");
        ?>
        <h1 class="nad">Error </h1>
        <?php
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);



    
 
}
?>


