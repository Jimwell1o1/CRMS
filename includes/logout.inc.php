<?php
    session_start();
    require_once 'emptySession.php';

    unset($_SESSION["userName"]);
    emptyUserLoginSession();
    
    header("location: ../login.php");
    exit();
?>