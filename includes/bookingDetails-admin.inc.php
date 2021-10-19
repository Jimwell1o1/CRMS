<?php
    session_start();

    if(isset($_POST['confirm-submit'])){

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        $username = $_SESSION["bookingUsername"];
        $name = $_SESSION["bookingName"];
        $gender = $_SESSION["bookingGender"];
        $date = $_SESSION["bookingDate"];
        $time = $_SESSION["bookingTime"];
        $consultation = $_SESSION["bookingConsultation"];
        $branch = $_SESSION["bookingBranch"];
        $message = $_SESSION["bookingMessage"];
        $status = "Pending";
        
        bookingDetails_admin($conn, $username, $name, $gender, $date, $time, $consultation, $branch, $message, $status);
  
    }else {
        header("location: ../booking.php");
        exit();
    }
?>
