<?php
include ("../php/conexion.php");

$descrip = $_POST["descmarcapro"];
$estado = $_POST["estadomarcapro"];

$insertar = "INSERT INTO marca_producto(descrip_marca_p, estado_p) VALUES ('$descrip', '$estado')";

$resultado = mysqli_query($conexion, $insertar);
if($resultado) {
    echo "<script>alert('Se ha registrado el pedido');
    window.location='/Proyecto-Sistema/marcaproductos/marcaproductos.php'</script>"; 
   //se deja el / cuando se sube a internet, en servidor
} else {
    echo "<script>alert('No se pudo registrar')";
}