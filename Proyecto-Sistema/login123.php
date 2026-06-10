<?php

include("php/conexion.php");

if (!empty($_POST)) {
    $username = $_POST['username'];
    $rawPassword = $_POST['password'];

    session_start();

    $stmt = mysqli_prepare($conexion, "SELECT * FROM USERS WHERE USERNAME = ?");
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $resultado = mysqli_stmt_get_result($stmt);
    $filas = mysqli_fetch_array($resultado);
    mysqli_stmt_close($stmt);

    $authenticated = false;
    if ($filas) {
        if (password_verify($rawPassword, $filas['password'])) {
            $authenticated = true;
        } elseif ($filas['password'] === md5($rawPassword)) {
            // Migrar hash MD5 a bcrypt
            $newHash = password_hash($rawPassword, PASSWORD_DEFAULT);
            $upd = mysqli_prepare($conexion, "UPDATE USERS SET password = ? WHERE USERNAME = ?");
            mysqli_stmt_bind_param($upd, "ss", $newHash, $username);
            mysqli_stmt_execute($upd);
            mysqli_stmt_close($upd);
            $authenticated = true;
        }
    }

    if ($authenticated) {
        $_SESSION['username'] = $username;
        if ($filas['rol_user'] == 'Administrador') {
            header("location: users/usuarios.php");
        } else if ($filas['rol_user'] == 'Cliente') {
            header("location: clientes/productos-clientes.php");
        }
    } else {
        include("login1.php");
        echo '<h1 class="nad">Error</h1>';
    }

    mysqli_close($conexion);
}
?>
