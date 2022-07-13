<?php
include ("../php/conexion.php");

$cod = $_GET["cod"];
if($cod == 1) {
    
    echo "<script>alert('No se pudo eliminar al Administrador 25')</script>";
    header("Location: modificar.php");
    exit;
}
$eliminar = "DELETE FROM users where cod_user = '$cod'";

$resultadoEliminar = mysqli_query($conexion, $eliminar);



if($resultadoEliminar) {
    header("Location: modificar.php");
} else {
        echo "<script>alert('No se pudo Eliminar');window.history.go(-1);</script>";
    }