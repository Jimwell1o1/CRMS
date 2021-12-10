<?php
    session_start();

    if(isset($_POST['submit'])){

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        $id = $_POST["bookid"];
        $name = $_POST["name"];
        $gender = $_POST["gender"];
        $email = $_POST["email"];
        $date = $_POST["date"];
        $time = $_POST["time"];
        $consultation = $_POST["procedure"];
        $branch = $_POST["branch"];
        $status = $_POST["status"];
        $reminder = $_POST["reminder"];
        $message = $_POST["message"];

        bookingUpdate($conn, $id, $name, $gender, $email, $date, $time, $consultation,$branch, $status,$reminder, $message);

    }else {
        header("location: ../admin_new/pending_tables.php");
        exit();
    }
?>
  