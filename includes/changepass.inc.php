<?php
    session_start();

    if(isset($_POST['submit'])){

        require_once '../forms/includes/dbh.inc.php';
        require_once '../forms/includes/functions.inc.php';

        $username = $_SESSION["useruid"];
        $password = $_POST['pass0'];
        $newpassword = $_POST['pass1'];

        $_SESSION['loginUsername'] = $username;
        $_SESSION['loginPassword'] = $password;
        $_SESSION['newPassword'] = $newpassword;

        changePass($conn, $username, $password, $newpassword);

    }else {
        header("location: ../index.php");
        exit();
    }

?>