<?php
    session_start();

    if(isset($_POST['submit'])){

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        $username = $_SESSION["useruid"];
        $password = $_POST['pass1'];
        $newpassword = $_POST['pass0'];

        $_SESSION['loginUsername'] = $username;
        $_SESSION['loginPassword'] = $password;
        $_SESSION['newPassword'] = $newpassword;

        changePass($conn, $username, $password, $newpassword);

    }else {
        header("location: ../login.php");
        exit();
    }

?>