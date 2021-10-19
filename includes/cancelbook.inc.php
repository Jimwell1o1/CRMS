<?php
    session_start();

    require_once 'dbh.inc.php';

    if(isset($_POST['submit'])){


        $sql = "SELECT * FROM booking;";
        $result = mysqli_query($conn, $sql);
        $resultChecked = mysqli_num_rows($result);

        $bookingId = $_POST['bookId'];

        $bookingStatus = "UPDATE booking SET bookingStatus = 'Cancelled' WHERE bookingId = '$bookingId';";

        if($resultChecked > 0){  
            while($row = mysqli_fetch_assoc($result)){
                if($bookingId === $row['bookingId']){
                    mysqli_query($conn, $bookingStatus);
                }   
            }
        }
        $_SESSION['Canceled'] = 'canceled';
        header("location: ../user/history.php");
        exit();

    }

?>