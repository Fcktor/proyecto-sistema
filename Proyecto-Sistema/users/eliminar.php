<?php
include ("../php/conexion.php");

$cod = $_GET["cod"];
if($cod == 1) {
    
    echo "<script>alert('No se pudo eliminar al Administrador 25')</script>";
    header("Location: modificar.php");
    exit;
}
$stmt = mysqli_prepare($conexion, "DELETE FROM users WHERE cod_user = ?");
mysqli_stmt_bind_param($stmt, "s", $cod);
$resultadoEliminar = mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);



if($resultadoEliminar) {
    header("Location: modificar.php");
} else {
        echo "<script>alert('No se pudo Eliminar');window.history.go(-1);</script>";
    }