<?php
    session_start();

    require_once '../includes/dbh.inc.php';
?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/accepted.css">
    <script src="../sweetalert/jquery-3.5.1.min.js"></script>
    <script src="../sweetalert/sweetalert2.all.min.js"></script>
    <title> Accepted Schedule </title>
</head>
    <body>
        <!-- Accepted Schedule container  -->
        <div class="accepted-container">
            <div class="welcome">
                <a href="profile-admin.php"> <img src="../images/logo.png" title="Home"> </a>
            </div>
            <div class="accepted-content">
                <h1> Accepted Schedule </h1>
                <div class="accepted-booking">
                    <?php
                        $sql = "SELECT * FROM booking;";
                        $result = mysqli_query($conn, $sql);
                        $resultChecked = mysqli_num_rows($result);

                        if($resultChecked > 0){  
                            while($row = mysqli_fetch_assoc($result)){
                                if("Accepted" === $row['bookingStatus']){ ?>
                                <table>
                                    <tr>
                                        <td> Name </td>
                                        <td> Date </td>
                                        <td> Time </td>
                                        <td> Consultation </td>
                                        <td> Payment </td>
                                        <td> Status </td>
                                        <td> Action </td>
                                    </tr>
                                    <tr>
                                        <td> <?php echo $row['bookingName'] ?> </td>
                                        <td> <?php echo $row['bookingDate'] ?> </td>
                                        <td> <?php echo $row['bookingTime'] ?> </td>
                                        <td> <?php echo $row['bookingConsultation'] ?> </td>
                                        <td> <?php echo $row['bookingPayment'] ?> </td>
                                        <td class="status"> <?php echo $row['bookingStatus'] ?> </td>
                                        <td> 
                                            <form action="../includes/updateAcceptedData.php?bookingId=<?php echo htmlspecialchars($row['bookingId'])?>" method="POST">
                                                <button id="done-button" name="submit"> Done </button> 
                                                <button > Missed </button> 
                                            </form>
                                        </td>
                                    </tr>
                                </table>
                        <?php } } } ?>
                    </div>
                </div>
                <div class="back-button">
                    <a href="profile-admin.php"> Back </a>
                </div>
            </div>
    </body>


    <?php
        if(isset($_SESSION['Done'])){ ?>
            <script>
                Swal.fire({
                    position: 'top-end',
                    width: '250',
                    icon: 'success',
                    title: 'Done!',
                    showConfirmButton: false,
                    timer: 1500
                })
            </script>
        <?php }
        unset($_SESSION['Done']);
    
        if(isset($_SESSION['Missed'])){ ?>
            <script>
                Swal.fire({
                    position: 'top-end',
                    width: '250',
                    icon: 'error',
                    title: 'Missed!',
                    showConfirmButton: false,
                    timer: 1500
                })
            </script>
        <?php }
        unset($_SESSION['Missed']);
    ?>
</html>