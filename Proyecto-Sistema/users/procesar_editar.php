<?php
include ("../php/conexion.php");

$cod = $_POST["cod"];
$idusuario = $_POST["username"];
$rol = $_POST["rol"];
$dni = $_POST["dni"];
$nombre = $_POST["nombre"];
$telef_persona = $_POST["telef_persona"];


//actualzar
$actualizar = "UPDATE users SET username ='$idusuario', rol_user = '$rol',
 dni_persona = '$dni', nombre = '$nombre', telef_persona = '$telef_persona' WHERE cod_user='$cod'";

$resultado = mysqli_query($conexion, $actualizar);
if($resultado) {
    echo "<script>alert('Se ha actualizado los cambios');
    window.location='/Proyecto-Sistema/users/modificar.php'</script>";   //se deja el / cuando se sube a internet, en servidor
} else {
    echo "<script>alert('No se pudo registrar');window.history.go(-1);</script>";
}