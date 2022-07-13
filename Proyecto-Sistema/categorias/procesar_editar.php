<?php
include ("../php/conexion.php");

$cod = $_POST["cod"];
$descrip = $_POST["desccat"];
$estado = $_POST["estadocat"];



//actualzar
$actualizar = "UPDATE categoria_producto SET descrip_categ ='$descrip', estado_categ = '$estado'
 WHERE cod_categ='$cod'";

$resultado = mysqli_query($conexion, $actualizar);
if($resultado) {
    echo "<script>alert('Se ha actualizado los cambios');
    window.location='/Proyecto-Sistema/categorias/categorias.php'</script>"; 
} else {
    echo "<script>alert('No se pudo registrar');window.history.go(-1);</script>";
}