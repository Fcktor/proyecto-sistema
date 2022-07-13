<?php
include ("../php/conexion.php");

$cod = $_POST["cod"];
$descrip = $_POST["desmarcas"];
$tel = $_POST["telmarcas"];
$dir = $_POST["dirmarcas"];
$ruc = $_POST["ruc"];


//actualzar
$actualizar = "UPDATE marca_sociedad SET descrip_marca_s ='$descrip', telef_marca_s = '$tel', direccion_marca_s = '$dir', ruc = '$ruc'
 WHERE cod_marca_s='$cod'";

$resultado = mysqli_query($conexion, $actualizar);
if($resultado) {
    echo "<script>alert('Se ha actualizado los cambios');
    window.location='/Proyecto-Sistema/marcasociedad/marcasociedad.php'</script>"; 
} else {
    echo "<script>alert('No se pudo registrar');window.history.go(-1);</script>";
}