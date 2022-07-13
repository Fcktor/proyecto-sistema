<?php

    include_once 'usersession.php';

    $userSession = new UserSession();
    $userSession->closeSession();

    header("location: index.php");

?>