<?php
include ("../php/conexion.php");

$cod = $_POST["cod"];
$descrip = $_POST["desmarcap"];
$estado = $_POST["estadomarcap"];



//actualzar
$stmt = mysqli_prepare($conexion, "UPDATE marca_producto SET descrip_marca_p = ?, estado_p = ? WHERE cod_marca_p = ?");
mysqli_stmt_bind_param($stmt, "sss", $descrip, $estado, $cod);
$resultado = mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
if($resultado) {
    echo "<script>alert('Se ha actualizado los cambios');
    window.location='/Proyecto-Sistema/marcaproductos/marcaproductos.php'</script>"; 
} else {
    echo "<script>alert('No se pudo registrar');window.history.go(-1);</script>";
}