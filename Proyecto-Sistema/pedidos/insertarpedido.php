<?php
include ("../php/conexion.php");

$montototal = $_POST["montototal"];
$codprod = $_POST["codprod"];
$coduser = $_POST["coduser"];
$fechapedido = $_POST["fecha"];

$insertar = "INSERT INTO pedidos(monto_total_ped, cod_prod, cod_user, fecha_entrega) VALUES ('$montototal', '$codprod', '$coduser', '$fechapedido')";

$resultado = mysqli_query($conexion, $insertar);
if($resultado) {
    echo "<script>alert('Se ha registrado el pedido');
    window.location='/Proyecto-Sistema/pedidos/pedidos.php'</script>";   //se deja el / cuando se sube a internet, en servidor
} else {
    echo "<script>alert('No se pudo registrar');window.history.go(-1);</script>";
}