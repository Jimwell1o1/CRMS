<?php
    session_start();

    if(isset($_POST['submit'])){

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        $admin_username = $_POST['admin_username'];
        $admin_password = $_POST['admin_password'];

        $_SESSION['login_adminUsername'] = $admin_username;
        $_SESSION['login_adminPassword'] = $admin_password;

        loginAdmin($conn, $admin_username, $admin_password);

    }else {
        header("location: ../admin/login-admin.php");
        exit();
    }

?>