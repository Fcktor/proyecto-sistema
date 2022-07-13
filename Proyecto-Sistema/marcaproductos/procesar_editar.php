<?php
include ("../php/conexion.php");

$cod = $_POST["cod"];
$descrip = $_POST["desmarcap"];
$estado = $_POST["estadomarcap"];



//actualzar
$actualizar = "UPDATE marca_producto SET descrip_marca_p ='$descrip', estado_p = '$estado'
 WHERE cod_marca_p='$cod'";

$resultado = mysqli_query($conexion, $actualizar);
if($resultado) {
    echo "<script>alert('Se ha actualizado los cambios');
    window.location='/Proyecto-Sistema/marcaproductos/marcaproductos.php'</script>"; 
} else {
    echo "<script>alert('No se pudo registrar');window.history.go(-1);</script>";
}