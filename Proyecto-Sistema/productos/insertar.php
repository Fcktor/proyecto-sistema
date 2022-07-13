<?php
include ("../php/conexion.php");

$titulo_prod = $_POST["titulo_prod"];
$desc_prod = $_POST["desc_prod"];
$precio_sep = $_POST["precio_sep"];
$precio_pro = $_POST["precio_pro"];
$stock_n = $_POST["stock_n"];
$stock_m = $_POST["stock_m"];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$cod_marca_s = $_POST["cod_marca_s"];
$cod_marca_p = $_POST["cod_marca_p"];
$cod_categ = $_POST["cod_categ"];


$insertar = "INSERT INTO productos(title_prod, descrip_prod, precio_separacion_prod, 
precio_prod, stock_now, stock_min, imagen_producto, cod_marca_s, cod_marca_p, cod_categ) VALUES ('$titulo_prod', '$desc_prod', '$precio_sep',
'$precio_pro','$stock_n', '$stock_m', '$imagen','$cod_marca_s', '$cod_marca_p', '$cod_categ')";

$resultado = mysqli_query($conexion, $insertar);
if($resultado) {
    echo "<script>alert('Se ha registrado el producto');
    window.location='/Proyecto-Sistema/productos/productos.php'</script>";   //se deja el / cuando se sube a internet, en servidor
} else {
    echo "<script>alert('No se pudo registrar');window.history.go(-1);</script>";
}