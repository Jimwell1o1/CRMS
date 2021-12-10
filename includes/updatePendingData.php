<?php


use PHPMailer\PHPMailer\PHPMailer;
               
    session_start();

    require_once 'dbh.inc.php';

    if(isset($_POST['submit'])){

        $sql = "SELECT * FROM booking;";
        $result = mysqli_query($conn, $sql);
        $resultChecked = mysqli_num_rows($result);

        $bookingId = $_GET['bookingId'];

        $bookingStatus = "UPDATE booking SET bookingStatus = 'Accepted' WHERE bookingId = '$bookingId';";

        if($resultChecked > 0){  
            while($row = mysqli_fetch_assoc($result)){
                if($bookingId === $row['bookingId']){
                    mysqli_query($conn, $bookingStatus);
                }
            }
        }

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die();
        }
        date_default_timezone_set('Asia/Manila');
        $error = "";
        
        //$recipient = "username@gmail.com";
        $name = $_POST['username'];
        $recipient = $_POST['useremail'];
        $time = $_POST['usertime'];
        $date = $_POST['userdate'];
        $branch = $_POST['userbranch'];
        //$expFormat = mktime(date("H"), date("i"), date("s"), date("m"), date("d"), date("Y"));
        $currentdate = date("Y-m-d H:i:s");
        $currenttime = date("h:i:s");
        
        // Insert Temp Table
        
        $output="<h3>Appointment Confirmation</h3>";
        $output.="<h4>Hi " .$name. "!</h4>";
        $output.='<p>This is MCY Dental Clinic. We want to know that your appointment is now successfully confirmed on <b>' . $date .'</b> at <b>'.$time. '. </b>Please arrive at the assigned time and date to avoid canceling your appointment. Thank you and stay safe! </p>';
        $output.='<p> If you need to reschedule/cancel your appointment or if you have any concerns beyond our service, please call us on (02) 8640-5536 and text 0945-568-4584 or visit our website on <a href="mcydentalclinic.epizy.com/index.php#contact">MCY Dental Clinic</a>. Thank you and stay safe! </p>';
        $output.='<p>Thanks,</p>';
        $output.='<p>The MCY Dental Clinic</p>';
        $body = $output;
        $subject = "MCY Dental Clinic -  $branch";

        $email_to = $recipient;

        //mysqli_query($conn, "INSERT INTO `emails` (`emailReceiver`, `emailSubject`, `emailBody`, `emailDate`, `emailTime`) VALUES ('" . $recipient . "', '" . $subject . "', '" . $body . "', '" . $currentdate . "', '" . $currenttime . "');");



        //autoload the PHPMailer
        require("../vendor/autoload.php");
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Host = "smtp.gmail.com"; // Enter your host here
        $mail->SMTPAuth = true;
        $mail->Username = "clinicmcydental@gmail.com"; // Enter your email here
        $mail->Password = "MCYdentaladmin01"; //Enter your passwrod here
        $mail->Port = 587;
        $mail->IsHTML(true);
        $mail->From = "clinicmcydental@gmail.com";
        $mail->FromName = "MCY Dental Clinic";

        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($email_to);

    

                if (!$mail->Send()) {
                    echo "Mailer Error: " . $mail->ErrorInfo;
                } else {
                    header("Location: ../accepted_tables.php?error=none");
                    
                }
            
    //End of Emailing

        $_SESSION['Accepted'] = 'Accepted';
        header("location: ../admin_new/accepted_tables.php?error=none");
        exit();


    }else {
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
        header("location: ../admin_new/declined_tables.php");
        exit();
    }

?>