<?php


$idusuario = isset($_POST['txt_idusuario']) ?$_POST['txt_idusuario'] : '';
$passuser = isset($_POST['txt_contraseña']) ?$_POST['txt_contraseña'] : '';
$roluser = isset($_POST['txt_rol']) ?$_POST['txt_rol'] : '';
$dniuser = isset($_POST['txt_dni']) ?$_POST['txt_dni'] : '';
$nombreuser = isset($_POST['txt_nombre']) ?$_POST['txt_nombre'] : '';
$teluser = isset($_POST['txt_tel']) ?$_POST['txt_tel'] : '';
$codmarcas = isset($_POST['txt_marca_s']) ?$_POST['txt_marca_s'] : '';

try{

    $conexion = new PDO('mysql:host=localhost; port=3306;dbname=khopy_bd', 'root', '');
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);



    $pdo = $conexion->prepare('INSERT INTO users(idusuario, pass_user, rol_user, dni_persona, nombre_persona, telef_persona, cod_marca_s) VALUES(?,?,?,?,?,?,?)');
    $pdo->bindParam(1, $idusuario);
    $pdo->bindParam(2, $passuser);
    $pdo->bindParam(3, $roluser);
    $pdo->bindParam(4, $dniuser);
    $pdo->bindParam(5, $nombreuser);
    $pdo->bindParam(6, $teluser);
    $pdo->bindParam(7, $codmarcas);
    $pdo->execute() or die(print($pdo->errorInfo())); 

    echo json_encode('true');


} catch(PDOException $error) {
    echo $error->getMessage();
    die();
}