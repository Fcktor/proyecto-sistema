<?php
include ("../php/conexion.php");

$descrip = $_POST["descripmarcas"];
$telefono = $_POST["tel"];
$direccion = $_POST["dir"];
$ruc = $_POST["ruc"];

$insertar = "INSERT INTO marca_sociedad(descrip_marca_s, telef_marca_s, direccion_marca_s, ruc) VALUES ('$descrip', '$telefono', '$direccion', '$ruc')";

$resultado = mysqli_query($conexion, $insertar);
if($resultado) {
    echo "<script>alert('Se ha registrado el pedido');
    window.location='/Proyecto-Sistema/marcasociedad/marcasociedad.php'</script>"; 
   //se deja el / cuando se sube a internet, en servidor
} else {
    echo "<script>alert('No se pudo registrar')";
}