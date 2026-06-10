<?php
include ("../php/conexion.php");

$descrip = $_POST["descmarcapro"];
$estado = $_POST["estadomarcapro"];

$stmt = mysqli_prepare($conexion, "INSERT INTO marca_producto(descrip_marca_p, estado_p) VALUES (?, ?)");
mysqli_stmt_bind_param($stmt, "ss", $descrip, $estado);
$resultado = mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
if($resultado) {
    echo "<script>alert('Se ha registrado el pedido');
    window.location='/Proyecto-Sistema/marcaproductos/marcaproductos.php'</script>"; 
   //se deja el / cuando se sube a internet, en servidor
} else {
    echo "<script>alert('No se pudo registrar')";
}