<?php


//kapag ang user pumunta dito babalik siya sa home page
if (isset($_POST["submit"]) && $_POST['g-recaptcha-response'] != "") {
    # code...
    echo "It works!"; //pang testing

    $secret='6LdDOTkdAAAAAAhioXaKhLgS-aZw6ZbNzEO94cBN';
    $verifyResponse = file_get_contents('https://google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);

    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];



    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if($responseData->success){
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
    if (usernamelimit($username) !== false) {
        # code...
        header("Location: ../signup.php?error=uidlimit");
        exit();
    }
    // if (strpass($pwd) !== false) {
    //     # code...
    //     header("Location: ../signup.php?error=usestrngpass");
    //     exit();
    // }
    if (uidExists($conn, $username, $email) !== false) {
        # code...
        header("Location: ../signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $name, $email, $username, $pwd);
    }

} else {
    header("Location: ../signup.php");
    exit();
}