<?php
include ("../php/conexion.php");

$cod = $_POST["cod"];
$montototal = $_POST["montototal"];
$codprod = $_POST["codprod"];
$coduser = $_POST["coduser"];
$fechapedido = $_POST["fecha"];


//actualzar
$actualizar = "UPDATE pedidos SET monto_total_ped ='$montototal', cod_prod = '$codprod',
 cod_user = '$coduser', fecha_entrega = '$fechapedido' WHERE cod_pedid='$cod'";

$resultado = mysqli_query($conexion, $actualizar);
if($resultado) {
    echo "<script>alert('Se ha actualizado los cambios');
    window.location='/Proyecto-Sistema/pedidos/modificarpedido.php'</script>"; 
} else {
    echo "<script>alert('No se pudo registrar');window.history.go(-1);</script>";
}