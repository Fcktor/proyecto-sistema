<?php
include ("../php/conexion.php");

$descrip = $_POST["descripmarcas"];
$telefono = $_POST["tel"];
$direccion = $_POST["dir"];
$ruc = $_POST["ruc"];

$stmt = mysqli_prepare($conexion, "INSERT INTO marca_sociedad(descrip_marca_s, telef_marca_s, direccion_marca_s, ruc) VALUES (?, ?, ?, ?)");
mysqli_stmt_bind_param($stmt, "ssss", $descrip, $telefono, $direccion, $ruc);
$resultado = mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
if($resultado) {
    echo "<script>alert('Se ha registrado el pedido');
    window.location='/Proyecto-Sistema/marcasociedad/marcasociedad.php'</script>"; 
   //se deja el / cuando se sube a internet, en servidor
} else {
    echo "<script>alert('No se pudo registrar')";
}