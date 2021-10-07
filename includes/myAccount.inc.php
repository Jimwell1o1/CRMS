<?php
    session_start();

    if(isset($_POST['save-submit'])){

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        $id = $_SESSION["ID"];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];


        if(empty($name) ||empty($email) ){
            header("location: ../user/profile.php?error=emptyInput");
            exit();
        }else {
                 


            $sql = "UPDATE users SET usersName = '$name', usersEmail = '$email' WHERE usersId = '$id';";
            $query_run = mysqli_query($conn, $sql);

            if($query_run){
                $_SESSION['profileUpdated'] = 'profileUpdated';
                $_SESSION["userName"] = $fullname;
                
                header("location: ../index.php");
                exit();
            }else {
                echo "error";
            }
        }
    }
    
?>