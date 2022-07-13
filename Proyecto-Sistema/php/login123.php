<?php

include("../php/conexion.php");

//Loginnn

if (!empty($_POST)) {
    $usuario = mysqli_real_escape_string($conexion, $_POST['username']);
    $password = mysqli_real_escape_string($conexion, $_POST['password']);
    $contraseñaconhash = md5($password);
    $sql = "SELECT cod_user FROM users WHERE username = '$usuario' AND password = '$contraseñaconhash'";
    $resultado = $conexion->query($sql);
    $rows = $resultado->num_rows;
    if ($rows > 0) {
        $row = $resultado->fetch_assoc();
        $_SESSION['username']=$row["username"];
        header("Location: home.php");

    }else{
        echo "<script>
                alert('Usuario o password incorrecto');
                window.location = '../login1.php';
              </script>";
    }
}
?>