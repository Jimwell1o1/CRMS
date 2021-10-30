<?php


//kapag ang user pumunta dito babalik siya sa home page
if (isset($_POST["submit"])) {
    # code...
    echo "It works!"; //pang testing

    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];



    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
        # code...
        header("Location: ../signup.php?error=emptyinput");
        exit();
    }
    if (invalidUid($username) !== false) {
        # code...
        header("Location: ../signup.php?error=invaliduid");
        exit();
    }
    if (usernamelimit($username) !== false) {
        # code...
        header("Location: ../signup.php?error=uidlimit");
        exit();
    }
    if (invalidEmail($email) !== false) {
        # code...
        header("Location: ../signup.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        # code...
        header("Location: ../signup.php?error=passwordsdontmatch");
        exit();
    }
    if (strpass($pwd) !== false) {
        # code...
        header("Location: ../signup.php?error=usestrngpass");
        exit();
    }
    if (uidExists($conn, $username, $email) !== false) {
        # code...
        header("Location: ../signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $name, $email, $username, $pwd);


} else {
    header("Location: ../signup.php");
    exit();
}