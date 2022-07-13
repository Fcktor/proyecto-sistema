<?php
include ("../php/conexion.php");

$cod = $_POST["cod"];
$titulo_prod = $_POST["titulo"];
$desc_prod = $_POST["descripcion"];
$precio_sep = $_POST["precioseparacion"];
$precio_pro = $_POST["precioproducto"];
$stock_n = $_POST["stocknow"];
$stock_m = $_POST["stockmin"];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$cod_marca_s = $_POST["codmarcas"];
$cod_marca_p = $_POST["codmarcap"];
$cod_categ = $_POST["codcateg"];


//actualzar
$actualizar = "UPDATE productos SET title_prod ='$titulo_prod', descrip_prod = '$desc_prod',
 precio_separacion_prod = '$precio_sep', precio_prod = '$precio_pro', stock_now = '$stock_n', stock_min = '$stock_m', cod_marca_s = '$cod_marca_s',
 imagen_producto = '$imagen' , cod_marca_p = '$cod_marca_p', cod_categ = '$cod_categ' WHERE cod_prod='$cod'";

$resultado = mysqli_query($conexion, $actualizar);
if($resultado) {
    echo "<script>alert('Se ha actualizado los cambios');
    window.location='/Proyecto-Sistema/productos/modificar.php'</script>"; 
} else {
    echo "<script>alert('No se pudo registrar')</script>";
}