<?php
include ("../php/conexion.php");

$cod = $_GET["cod"];

$stmt = mysqli_prepare($conexion, "DELETE FROM pedidos WHERE cod_pedid = ?");
mysqli_stmt_bind_param($stmt, "s", $cod);
$resultadoEliminar = mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

if($resultadoEliminar) {
    header("Location: modificarpedido.php");
} else {
        echo "<script>alert('No se pudo Eliminar');window.history.go(-1);</script>";
    }