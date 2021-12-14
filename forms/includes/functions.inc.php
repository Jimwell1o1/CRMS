<?php
use PHPMailer\PHPMailer\PHPMailer;

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

function usernamelimit($username){
    $result;
    if (strlen($username) > 12) {
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

// function strpass($pwd){
// $result;
// if (!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $pwd)) {
//     $result = true;
        
// } else {
    
//     $result = false;
// }
// return $result;

// }

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
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd, usersCode, usersVerify) VALUES (?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        # code...
        header("Location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    $set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$key=substr(str_shuffle($set), 0, 12);
    $verify=0;
    mysqli_stmt_bind_param($stmt, "ssssss",  $name, $email, $username, $hashedPwd, $key, $verify);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

   
    $uid=mysqli_insert_id($conn);

    //start email
    $output = '';

    $output.='<p>Please click on the following link to validate your account.</p>';
    //replace the site url
    $output.="<p><a href='http://localhost/crms/forms/activate.php?uid=$uid&code=$key' target='_blank'>CLICK HERE TO ACTIVATE</a></p>";
    $body = $output;
    $subject = "MCY ACCOUNT VERIFY";

    $email_to = $email;


     //autoload the PHPMailer
     require("../../vendor/autoload.php");
     $mail = new PHPMailer();
     $mail->IsSMTP();
     $mail->Host = "smtp.gmail.com"; // Enter your host here
     $mail->SMTPAuth = true;
     $mail->Username = "clinicmcydental@gmail.com"; // Enter your email here
     $mail->Password = "MCYdentaladmin01"; //Enter your passwrod here
     $mail->Port = 587;
     $mail->IsHTML(true);
     $mail->From = "clinicmcydental@gmail.com";
     $mail->FromName = "MCY Dental Clinic Account Verification";

     $mail->Subject = $subject;
     $mail->Body = $body;
     $mail->AddAddress($email_to);

     if (!$mail->Send()) {
         echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
         echo "<div class='alert alert-success alert-dismissible'>
         <button type='button' class='close' data-dismiss='alert'>&times;</button>
         An email has been sent, kindly please<br> check your email account.
       </div>";
     }


    $_SESSION['sign_msg'] = "Verification code sent to your email.";
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
 
        $query=mysqli_query($conn,"select * from users where usersUid='$username' OR usersEmail='$username'");
        $row=mysqli_fetch_array($query);
    
        if($row['usersVerify']==0){
            header('location:../email-verification.php?error=notverified&useruid='.$uidExists["usersUid"]);
            }
            else{
                session_start();
                $_SESSION["userid"] = $uidExists["usersId"];
                $_SESSION["useruid"] = $uidExists["usersUid"];
                $_SESSION["username"] = $uidExists["usersName"];
                $_SESSION["userPassword"] = $pwdHashed;
                header("Location: ../../index.php");
                exit();
            }
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
        header("Location: ../user/reset-password.php?error=wrongpass");
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