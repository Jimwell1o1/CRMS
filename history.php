<?php
    session_start();
    require_once 'includes/dbh.inc.php';
    require_once 'includes/emptySession.php';
    
    emptyUserSignupSession();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="right" id="history">
                    <h1> History </h1>
                    <h5><a href="index.php">Home</a></h5>
                    <div class="booking">
                        
                                       <table>
                                            <tr>
                                                <td> Date </td>
                                                <td> Time </td>
                                                <td> Consultation </td>
                                                <td> Branch </td>
                                                <td> Status </td>
                                            </tr>
                        <?php
                            $sql = "SELECT * FROM booking;";
                            $result = mysqli_query($conn, $sql);
                            $resultChecked = mysqli_num_rows($result);

                            if($resultChecked > 0){  
                                while($row = mysqli_fetch_assoc($result)){
                                    if($_SESSION["useruid"] === $row['bookingUserName']){ ?>

                                            <tr>
                                                <td> <?php echo $row['bookingDate'] ?> </td>
                                                <td> <?php echo $row['bookingTime'] ?> </td>
                                                <td> <?php echo $row['bookingConsultation'] ?> </td>
                                                <td> <?php echo $row['bookingBranch'] ?> </td>
                                                <td class="status"> <?php echo $row['bookingStatus'] ?> </td>
                                            </tr>
                                    

                            <?php } } } ?>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </body>


</body>
</html>