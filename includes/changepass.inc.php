<?php
    session_start();

    if(isset($_POST['submit'])){

        require_once '../forms/includes/dbh.inc.php';
        require_once '../forms/includes/functions.inc.php';

        $username = $_SESSION["useruid"];
        $password = $_POST['pass0'];
        $password2 = $_POST['pass2'];
        $newpassword = $_POST['pass1'];

        $_SESSION['loginUsername'] = $username;
        $_SESSION['loginPassword'] = $password;
        $_SESSION['newPassword'] = $newpassword;

        if($password != $password2){
            header("Location: ../user/reset-password.php?error=wrong");

        }
        elseif($password == "" || $password2 = ""){
            header("Location: ../user/reset-password.php?error=emptyinput");

        }
        elseif($password == $newpassword){
            header("Location: ../user/reset-password.php?error=sameasoldpass");

        }
        elseif($password==$password2 && $newpassword != $password){
            changePass($conn, $username, $password, $newpassword);

        }
      
    }else {
        header("location: ../index.php");
        exit();
    }

?>