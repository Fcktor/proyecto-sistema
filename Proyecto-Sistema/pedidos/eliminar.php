<?php
include ("../php/conexion.php");

$cod = $_GET["cod"];

$eliminar = "DELETE FROM pedidos where cod_pedid = '$cod'";

$resultadoEliminar = mysqli_query($conexion, $eliminar);

if($resultadoEliminar) {
    header("Location: modificarpedido.php");
} else {
        echo "<script>alert('No se pudo Eliminar');window.history.go(-1);</script>";
    }