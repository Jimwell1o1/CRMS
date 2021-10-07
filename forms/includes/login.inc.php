<?php

if (isset($_POST["submit"])) {
    # code...
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputsLogin($username, $pwd) !== false) {
        # code...
        header("Location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $username, $pwd);
} else {
    # code...
    header("Location: ../login.php");
        exit();

}