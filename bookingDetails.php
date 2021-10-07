<?php
    session_start();

    $name = "";
    $date = "";
    $time = "";
    $consultation = "";
    $branch = "";
    $payment = "";

    if(isset($_POST['submit'])){
        
        $name = $_POST['name'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $consultation = $_POST['consultation'];
        $branch = $_POST['branches'];
        $payment = $_POST['payment'];
    }
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bookingDetails.css">
    <title> Booking Details </title>
</head>
    <body>
        <div class="booking-details">
            <img src="images/logo.png">
            <h1> Booking Details </h1>

      

            <form id="jsform" class="form" action="includes/bookingDetails.inc.php" method="POST">
                <div class="details">
                    <div class="all-details">
                        <span class="text"> Name : </span>
                        <?php 
                            $_SESSION["bookingName"] = $name;
                            echo htmlspecialchars($name); 
                        ?>
                    </div>
                    <div class="all-details">
                        <span class="text"> Date : </span>
                        <?php 
                            $_SESSION["bookingDate"] = $date;
                            echo htmlspecialchars($date); 
                        ?>
                    </div>
                    <div class="all-details">
                        <span class="text"> Time : </span>
                        <?php 
                            $_SESSION["bookingTime"] = $time;
                            echo htmlspecialchars($time); 
                        ?>
                    </div>
                    <div class="all-details">
                        <span class="text"> Consultation : </span>
                        <?php 
                            $_SESSION["bookingConsultation"] = $consultation;
                            echo htmlspecialchars($consultation); 
                        ?>
                    </div>

                    <div class="all-details">
                        <span class="text"> Branch : </span>
                        <?php 
                            $_SESSION["bookingBranch"] = $branch;
                            echo htmlspecialchars($branch); 
                        ?>
                    </div>

                    <div class="all-details">
                        <span class="text"> Payment Method : </span>
                        <?php 
                            $_SESSION["bookingPayment"] = $payment;
                            echo htmlspecialchars($payment); 
                        ?>
                    </div>
                </div>
                <div class="buttons">
                    <input class="submit-button" type="submit" name="confirm-submit" value="Confirm">

                </div>
            </form>
        </div>

              

<script type="text/javascript">
  document.getElementById('jsform').submit();
</script>
    </body>
</html>

                            
                            