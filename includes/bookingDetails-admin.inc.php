<?php
    session_start();

    if(isset($_POST['confirm-submit'])){

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        $username = $_SESSION["admin_branchName"];
        $name = $_POST["name"];
        $gender = $_POST["gender"];
        $date = $_POST["date"];
        $time = $_POST["time"];
        $consultation = $_POST["procedure"];
        $branch = $_POST["branch"];
        $message = "";
        $status = "Pending";
        
        //echo  $username . $name . $gender.  $branch;
        bookingDetails_admin($conn, $username, $name, $gender, $date, $time, $consultation, $branch, $message, $status);
  
    }else {
        header("location: ../booking.php");
        exit();
    }
?>
