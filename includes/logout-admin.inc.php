<?php
    session_start();
    require_once 'emptySession.php';
    
    unset($_SESSION["admin_userName"]);
    emptyAdminLoginSession();

    header("location: ../admin/login-admin.php");
    exit();
?>