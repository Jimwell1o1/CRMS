<?php
    session_start();

    require_once 'dbh.inc.php';

    if(isset($_POST['submit'])){

        $sql = "SELECT * FROM booking;";
        $result = mysqli_query($conn, $sql);
        $resultChecked = mysqli_num_rows($result);

        $bookingId = $_GET['bookingId'];

        $bookingStatus = "UPDATE booking SET bookingStatus = 'Done' WHERE bookingId = '$bookingId';";

        if($resultChecked > 0){  
            while($row = mysqli_fetch_assoc($result)){
                if($bookingId === $row['bookingId']){
                    mysqli_query($conn, $bookingStatus);
                }   
            }
        }
        $_SESSION['Done'] = 'Done';
        header("location: ../admin_new/customer_history.php");
        exit();

    }else if(isset($_POST['delete'])) {
        $sql = "SELECT * FROM booking;";
        $result = mysqli_query($conn, $sql);
        $resultChecked = mysqli_num_rows($result);

        $bookingId = $_GET['bookingId'];

        $bookingStatus = "UPDATE booking SET bookingStatus = 'Declined' WHERE bookingId = '$bookingId';";

        if($resultChecked > 0){  
            while($row = mysqli_fetch_assoc($result)){
                if($bookingId === $row['bookingId']){
                    mysqli_query($conn, $bookingStatus);
                }
            }
        }
        $_SESSION['Declined'] = 'Declined';
        header("location: ../admin_new/Declined_tables.php");
        exit();
    }

?>