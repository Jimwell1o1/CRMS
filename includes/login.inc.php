<?php
    session_start();

    if(isset($_POST['submit'])){

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        $username = $_POST['username'];
        $password = $_POST['password'];

        $_SESSION['loginUsername'] = $username;
        $_SESSION['loginPassword'] = $password;

        loginUser($conn, $username, $password);

    }else {
        header("location: ../login.php");
        exit();
    }

?>