<?php
use PHPMailer\PHPMailer\PHPMailer;
$conn = mysqli_connect("localhost", "root", "", "phpproject01");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    die();
}

            $sql = "SELECT * FROM booking WHERE bookingDate = CURDATE() AND bookingStatus = 'Accepted' OR bookingStatus = 'Follow Up'";
            $result = mysqli_query($conn, $sql);//
            if(mysqli_num_rows($result) > 0){

                while($row = mysqli_fetch_assoc($result)){

                    
                    date_default_timezone_set('Asia/Manila');
                    $error = "";
                    
                    $name = $row['bookingName'];
                    $bookingEmail = $row['bookingemail'];
                    $bookingTime = $row['bookingTime'];
                    $bookingDate = date('M-d-Y', strtotime($row['bookingDate']));
                    $branch = $row['bookingBranch'];
                    $procedure = $row['bookingConsultation'];
                    $address = "";
                    // Insert Temp Table
                            
                    $output.="<h3>Hi " .$name. "!</h3>";
                    $output.='<p>This is MCY Dental Clinic. We want you to know that your scheduled appointment will be tomorrow  and is set on <b>' . $bookingDate .'</b> at <b>'.$bookingTime. '</b> for your '. $procedure. ' procedure. Please arrive at the assigned time and date and designated branch to avoid canceling your appointment. Thank you and stay safe! </p>';
                    $output.='<p>Your Appointment Details are the following:</p>';
                    $output.='<p><b>Name:</b>     '.$name.'</p>';
                    $output.='<p><b>Date:</b>     '. $bookingDate .'</p>';
                    $output.='<p><b>Time:</b>     '.$bookingTime.'</p>';
                    $output.='<p><b>Procedure:</b>     '.$procedure.'</p>';
                    $output.='<p><b>Branch:</b>     '.$branch.'</p>';

                    if($branch == "Malinao"){
                        $address = "30 Caruncho Ave, Malinao, 1600 Pasig, Philippines";
                    }else if($branch == "Pinagbuhatan"){
                        $address = "22 Urbano Velasco Ave St. 1602 Pasig, Philippines";
                    }else if($branch == "San Joaquin"){
                        $address = "9M Conception St. San Joaquin 1601 Pasig, Philippines";
                    }

                    $output.='<p><b>MCY Branch Address:</b>     '.$address.'</p>';

                    $output.='<p>Please call us on (02) 8640-5536 and text 0945 568 4584 or visit our website on <a href="mcydentalclinic.epizy.com/index.php#contact">MCY Dental Clinic</a> ,if you have any concerns beyond our service. Thank you and stay safe! </p>';
                    $output.='<p>Sincerely,</p>';
                    $output.='<p>The MCY Dental Clinic</p>';
                    $body = $output;
                    $subject = "MCY Dental Clinic Appointment";

                    $email_to = $bookingEmail;
    
                    //$email_to = $recipient
    
                    //autoload the PHPMailer
                    require("../../vendor/autoload.php");
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
                    //$mail->AddAddress($email_to);
                    $mail->addBCC($bookingEmail);

                    if (!$mail->Send()) {
                        echo "Mailer Error: " . $mail->ErrorInfo;
                    } else {
                        header("Location: ../email_sender.php?error=none");
                        
                    }
                }

                }else{
                header("Location: ../email_sender.php?error=nodatafound");
                }

                    ?>