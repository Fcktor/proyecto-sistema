<?php
include ("../php/conexion.php");

$cod = $_GET["cod"];

$eliminar = "DELETE FROM marca_sociedad where cod_marca_s = '$cod'";

$resultadoEliminar = mysqli_query($conexion, $eliminar);

if($resultadoEliminar) {
    header("Location: modificarmarcasso.php");
} else {
        echo "<script>alert('No se pudo Eliminar');window.history.go(-1);</script>";
    }