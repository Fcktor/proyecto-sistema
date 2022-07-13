<?php
include ("../php/conexion.php");

$idusuario = $_POST["username"];
$contraseña = $_POST["password"];
$rol = $_POST["rol"];
$dni = $_POST["dni"];
$nombre = $_POST["nombre"];
$tel = $_POST["tel"];
$marcas = $_POST["marcas"];

$contraseñaconhash = md5($contraseña);
//origin
$insertar = "INSERT INTO users(username, password, rol_user, dni_persona, nombre, telef_persona, cod_marca_s) VALUES('$idusuario','$contraseñaconhash', 
'$rol', '$dni', '$nombre', '$tel', '$marcas')";

//$insertar = "INSERT INTO usuarioss(username, password, rol_user, 
//dni_persona, nombre, telef_persona, cod_marca_s) VALUES('$idusuario','$contraseñaconhash', 
//'$rol', '$dni', '$nombre', '$tel', '$marcas')";
//$insertar = "INSERT INTO usuarios(nombre, username, password) VALUES('$nombre','$idusuario','$contraseñaconhash')";

$resultado = mysqli_query($conexion, $insertar);
if($resultado) {
    echo "<script>alert('Se ha registrado good');
    window.location='/Proyecto-Sistema/users/usuarios.php'</script>";   //se deja el / cuando se sube a internet, en servidor
} else {
    echo "<script>alert('No se pudo registrar');window.history.go(-1);</script>";
}




// 

?>