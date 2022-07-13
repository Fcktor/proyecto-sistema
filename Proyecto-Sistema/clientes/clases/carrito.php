<?php


require '../cifrado.php';
if(isset($_POST['cod'])){

    $cod = $_POST['cod'];
    $token = $_POST['token'];

    $token_tmp = hash_hmac('sha1', $cod, KEY_TOKEN);
    
    if ($token == $token_tmp){
        
        if(isset($_SESSION['carrito']['productos'][$cod])){
            $_SESSION['carrito']['productos'][$cod] += 1;   
        } else {
            $_SESSION['carrito']['productos'][$cod] = 1;    
        }

        $datos['numero'] = count( $_SESSION['carrito']['productos']);
        $datos['ok'] = true;

        
    } else {
        $datos['ok'] = false;
    }

}   else {
    $datos['ok'] = false;

}

echo json_encode($datos);