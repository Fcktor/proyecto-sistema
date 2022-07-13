<?php
include ("../php/conexion.php");

$cod = $_GET["cod"];

$eliminar = "DELETE FROM marca_producto where cod_marca_p = '$cod'";

$resultadoEliminar = mysqli_query($conexion, $eliminar);

if($resultadoEliminar) {
    header("Location: modificarmarcapro.php");
} else {
        echo "<script>alert('No se pudo Eliminar');window.history.go(-1);</script>";
    }