<?php
function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat){
    $result;
    if (empty($name) || empty($email) || empty($username)|| empty($pwd) || empty($pwdRepeat) ) {
        # code...
        $result = true;
        
    } else {
        
        $result = false;
    }
    return $result;
}

function invalidUid($username){
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username )) {
        # code...
        $result = true;
        
    } else {
        
        $result = false;
    }
    return $result;
}

function invalidEmail($email){
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        # code...
        $result = true;
        
    } else {
        
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat){
    $result;
    if ($pwd !== $pwdRepeat) {
        # code...
        $result = true;
        
    } else {
        
        $result = false;
    }
    return $result;
}

function uidExists($conn, $username, $email){
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        # code...
        header("Location: ../signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss",  $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        # code...
        return $row;

    } else {
        
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username, $pwd){
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        # code...
        header("Location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss",  $name, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("Location: ../signup.php?error=none");
    exit();
}

function emptyInputsLogin($username, $pwd){
    $result;
    if (empty($username)|| empty($pwd)) {
        # code...
        $result = true;
        
    } else {
        
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd){

    $uidExists =  uidExists($conn, $username, $username);

    if ($uidExists === false) {
        # code...
        header("Location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);


    if ($checkPwd === false) {
        # code...
        header("Location: ../login.php?error=wronglogin");
        exit();
    }
    elseif ($checkPwd === true) {
        # code...
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        $_SESSION["username"] = $uidExists["usersName"];
        $_SESSION["userPassword"] = $pwdHashed;
        header("Location: ../../index.php");
        exit();
    }
}

function changePass($conn, $username, $pwd, $newpassword){

    $uidExists =  uidExists($conn, $username, $username);

    if ($uidExists === false) {
        # code...
        header("Location: ../user/history.php?error=uidnotexist");
        exit();
    }

    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);


    if ($checkPwd === false) {
        # code...
        header("Location: ../login.php?error=wrongpass");
        exit();
    }
    elseif ($checkPwd === true) {
        # code...
      
        $pass1 = password_hash($newpassword, PASSWORD_DEFAULT);
        mysqli_query($conn, "UPDATE `users` SET `usersPwd` = '" . $pass1 . "' WHERE `usersUid` = '" . $username . "'");

    
    header("location: ../user/reset-password.php?error=none");
    exit();
    }
}