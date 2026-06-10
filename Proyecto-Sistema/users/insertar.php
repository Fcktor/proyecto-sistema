<?php
include ("../php/conexion.php");

$idusuario = $_POST["username"];
$contraseña = $_POST["password"];
$rol = $_POST["rol"];
$dni = $_POST["dni"];
$nombre = $_POST["nombre"];
$tel = $_POST["tel"];
$marcas = $_POST["marcas"];

$contraseñaconhash = password_hash($contraseña, PASSWORD_DEFAULT);

$stmt = mysqli_prepare($conexion, "INSERT INTO users(username, password, rol_user, dni_persona, nombre, telef_persona, cod_marca_s) VALUES(?, ?, ?, ?, ?, ?, ?)");
mysqli_stmt_bind_param($stmt, "sssssss", $idusuario, $contraseñaconhash, $rol, $dni, $nombre, $tel, $marcas);
$resultado = mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

if ($resultado) {
    echo "<script>alert('Se ha registrado good');window.location='/Proyecto-Sistema/users/usuarios.php'</script>";
} else {
    echo "<script>alert('No se pudo registrar');window.history.go(-1);</script>";
}
?>
