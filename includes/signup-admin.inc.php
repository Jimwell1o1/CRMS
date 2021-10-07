<?php
    session_start();

    if(isset($_POST['submit'])){

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        $admin_name = $_POST['admin_name'];
        $admin_email = $_POST['admin_email'];
        $admin_uid = $_POST['admin_uid'];
        $admin_password = $_POST['admin_password'];
        $admin_confirmpassword = $_POST['admin_confirmpassword'];

        $_SESSION['admin_name'] = $admin_name;
        $_SESSION['admin_email'] = $admin_email;
        $_SESSION['admin_uid'] = $admin_uid;
        $_SESSION['admin_password'] = $admin_password;
        $_SESSION['admin_confirmpassword'] = $admin_confirmpassword;


        if(invalidEmail($admin_email) !== false){
            header("location: ../admin/signup-admin.php?error=invalidemail");
            exit();
        }

        if(invalidUid($admin_uid) !== false){
            header("location: ../admin/signup-admin.php?error=invaliduid");
            exit();
        }

        if(pwdMatch($admin_password, $admin_confirmpassword) !== false){
            header("location: ../admin/signup-admin.php?error=passwordsdontmatch");
            exit();
        }

        if(admin_uidExists($conn, $admin_uid) !== false){
            header("location: ../admin/signup-admin.php?error=usernametaken");
            exit();
        }

        if(admin_emailExists($conn, $admin_email) !== false){
            header("location: ../admin/signup-admin.php?error=emailtaken");
            exit();
        }

        createAdminUser($conn, $admin_name, $admin_email, $admin_uid, $admin_password);   

    }else {
        header("location: ../admin/signup-admin.php");
        exit();
    }

