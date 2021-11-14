<?php
    session_start();

    if(isset($_POST['submit'])){

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        $id = $_POST["bookid"];
        $name = $_POST["name"];
        $gender = $_POST["gender"];
        $date = $_POST["date"];
        $time = $_POST["time"];
        $consultation = $_POST["procedure"];
        $branch = $_POST["branch"];
        $status = $_POST["status"];

        bookingUpdate($conn, $id, $name, $gender, $date, $time, $consultation, $branch, $status);

    }else {
        header("location: ../admin_new/pending_tables.php");
        exit();
    }
?>
  