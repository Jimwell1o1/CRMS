<?php

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

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

    $error = "";



    if($responseData->success){

        if(empty($name)){
            # code...
            $error = $error . "&name=empty";
       }else{
        $error = $error . "&name=".$name;
       }
        if(empty($email)){
            # code...
            $error = $error . "&email=empty";
        }else{
            $error =$error."&email=".$email;
           }
        if(empty($username)){
            # code...
            $error = $error . "&username=empty";
        }else{
            $error =$error."&username=".$username;
           }
        if(empty($pwd)){
            # code...
            $error = $error . "&pwd=empty";
        }
        if(empty($pwdRepeat)){
            # code...
            $error = $error . "&pwdrepeat=empty";
        }
    if(empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)){
        
        $_SESSION['name'] = $name;
     
         header("Location: ../signup.php?error=emptyinput$error");
         exit();
    }
    

    if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
        # code...
        header("Location: ../signup.php?error=emptyinput$error");
        exit();
    }
    if (invalidUid($username) !== false) {
        # code...
        header("Location: ../signup.php?error=invaliduid$error");
        exit();
    }
    
    if (invalidEmail($email) !== false) {
        # code...
        header("Location: ../signup.php?error=invalidemail$error");
        exit();
    }
    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        # code...
        header("Location: ../signup.php?error=passwordsdontmatch$error");
        exit();
    }
    if (usernamelimit($username) !== false) {
        # code...
        header("Location: ../signup.php?error=uidlimit$error");
        exit();
    }
    // if (strpass($pwd) !== false) {
    //     # code...
    //     header("Location: ../signup.php?error=usestrngpass");
    //     exit();
    // }
    if (uidExists($conn, $username, $email) !== false) {
        # code...
        header("Location: ../signup.php?error=usernametaken$error");
        exit();
    }

    createUser($conn, $name, $email, $username, $pwd);
    }

} else {

    header("Location: ../signup.php?error=nocaptcha");
    exit();
}