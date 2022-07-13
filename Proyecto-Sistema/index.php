<?php

include_once 'usuario.php';
include_once 'usersession.php';

$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
   
    
    $user->setUser($userSession->getCurrentUser());
    include_once 'home.php';

}else if(isset($_POST['username']) && isset($_POST['password'])){
    //echo "Validación de login";

   $userForm = $_POST['username'];
   $passForm = $_POST['password'];

   if($user->userExists($userForm, $passForm)){
    //echo "usuario validado";
    $userSession->setCurrentUser($userForm);
    $user->setUser($userForm);
    
    include_once 'home.php';


   }else {
    echo "nombre de usuario y/o password incorrecto";
    include_once 'login1.php';
   }

   
}else{
    //echo "Login";
    include_once 'login1.php';
}


?>