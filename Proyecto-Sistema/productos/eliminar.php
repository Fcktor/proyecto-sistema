<?php
include ("../php/conexion.php");

$cod = $_GET["cod"];

$eliminar = "DELETE FROM productos where cod_prod = '$cod'";

$resultadoEliminar = mysqli_query($conexion, $eliminar);

if($resultadoEliminar) {
    header("Location: modificar.php");
} else {
        echo "<script>alert('No se pudo Eliminar');window.history.go(-1);</script>";
    }