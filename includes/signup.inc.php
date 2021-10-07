<?php
    session_start();

    if(isset($_POST['submit'])){

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        $name = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $birthday = $_POST['birthday'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];

        $_SESSION['name'] = $name;
        $_SESSION['age'] = $age;
        $_SESSION['address'] = $address;
        $_SESSION['gender'] = $gender;
        $_SESSION['birthday'] = $birthday;
        $_SESSION['email'] = $email;
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['confirmpassword'] = $confirmpassword;


        if(invalidEmail($email) !== false){
            header("location: ../signup.php?error=invalidemail");
            exit();
        }

        if(invalidUid($username) !== false){
            header("location: ../signup.php?error=invaliduid");
            exit();
        }

        if(pwdMatch($password, $confirmpassword) !== false){
            header("location: ../signup.php?error=passwordsdontmatch");
            exit();
        }

        if(uidExists($conn, $username) !== false){
            header("location: ../signup.php?error=usernametaken");
            exit();
        }

        if(emailExists($conn, $email) !== false){
            header("location: ../signup.php?error=emailtaken");
            exit();
        }

        createUser($conn, $name, $age, $address, $gender, $birthday, $email, $username, $password);   

    }else {
        header("location: ../signup.php");
        exit();
    }

?>
