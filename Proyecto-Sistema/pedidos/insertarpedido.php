<?php
include ("../php/conexion.php");

$montototal = $_POST["montototal"];
$codprod = $_POST["codprod"];
$coduser = $_POST["coduser"];
$fechapedido = $_POST["fecha"];

$stmt = mysqli_prepare($conexion, "INSERT INTO pedidos(monto_total_ped, cod_prod, cod_user, fecha_entrega) VALUES (?, ?, ?, ?)");
mysqli_stmt_bind_param($stmt, "ssss", $montototal, $codprod, $coduser, $fechapedido);
$resultado = mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
if($resultado) {
    echo "<script>alert('Se ha registrado el pedido');
    window.location='/Proyecto-Sistema/pedidos/pedidos.php'</script>";   //se deja el / cuando se sube a internet, en servidor
} else {
    echo "<script>alert('No se pudo registrar');window.history.go(-1);</script>";
}