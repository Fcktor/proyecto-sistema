<?php
include ("../php/conexion.php");

$cod = $_GET["cod"];

$eliminar = "DELETE FROM categoria_producto where cod_categ = '$cod'";

$resultadoEliminar = mysqli_query($conexion, $eliminar);

if($resultadoEliminar) {
    header("Location: modificarcategoria.php");
} else {
        echo "<script>alert('No se pudo Eliminar');window.history.go(-1);</script>";
    }