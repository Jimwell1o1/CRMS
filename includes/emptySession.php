<?php 

    function emptyAdminLoginSession(){
        unset($_SESSION['admin_userName']);
        unset($_SESSION['login_adminPassword']);
        unset($_SESSION['admin_branchName']);
    }

    function emptyAdminSignupSession(){
        unset($_SESSION['admin_name']);
        unset($_SESSION['admin_email']);
        unset($_SESSION['admin_uid']);
        unset($_SESSION['admin_password']);
        unset($_SESSION['admin_confirmpassword']);
    }

    function emptyUserLoginSession(){
        unset($_SESSION['loginUsername']);
        unset($_SESSION['loginPassword']);
    }

    function emptyUserSignupSession(){
        unset($_SESSION['name']);
        unset($_SESSION['age']);
        unset($_SESSION['address']);
        unset($_SESSION['gender']);
        unset($_SESSION['birthday']);
        unset($_SESSION['email']);
        unset($_SESSION['username']);
        unset($_SESSION['password']);
        unset($_SESSION['confirmpassword']);
    }

?>