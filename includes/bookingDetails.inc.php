<?php
    session_start();

    if(isset($_POST['confirm-submit'])){

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        $username = $_SESSION["bookingUsername"];
        $name = $_SESSION["bookingName"];
        $email = $_SESSION["bookingemail"];
        $gender = $_SESSION["bookingGender"];
        $date = $_SESSION["bookingDate"];
        $time = $_SESSION["bookingTime"];
        $consultation = $_SESSION["bookingConsultation"];
        $branch = $_SESSION["bookingBranch"];
        $message = $_SESSION["bookingMessage"];
        $status = "Pending";
        
        bookingDetails($conn, $username, $name, $email, $gender, $date, $time, $consultation, $branch, $message, $status);
  
    }else {
        header("location: ../booking.php");
        exit();
    }
?>
