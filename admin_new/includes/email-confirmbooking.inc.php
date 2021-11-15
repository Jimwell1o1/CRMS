<?php
use PHPMailer\PHPMailer\PHPMailer;
               
                $conn = mysqli_connect("localhost", "root", "", "phpproject01");
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
                //$expFormat = mktime(date("H"), date("i"), date("s"), date("m"), date("d"), date("Y"));
                $currentdate = date("Y-m-d H:i:s");
                $currenttime = date("h:i:s");
                
                // Insert Temp Table
                
                $output="<h3>Appointment Confirmation</h3>";
                $output.="<h4>Hi " .$name. "!</h4>";
                $output.='<p>This is MCY Dental Clinic. We want to know that your appointment is now successfully confirmed on ' . $date .' at '.$time. '. <br>Please call us on (02)8640-5536 or text 0945 568 4584
                if you have any concerns regarding your appoinment. Thank you and stay safe! </p>';
                $output.='<p> Kindly please contact us on our website <a href="">www.mcydentalclinic.com/crms/index#contactus </a>if you need to reschedule or cancel your appointment. </p>';
                $output.='<p>Thanks,</p>';
                $output.='<p>The MCY Dental Team</p>';
                $body = $output;
                $subject = "MCY Dental Clinic Appointment Confirmation";

                $email_to = $recipient;

                //mysqli_query($conn, "INSERT INTO `emails` (`emailReceiver`, `emailSubject`, `emailBody`, `emailDate`, `emailTime`) VALUES ('" . $recipient . "', '" . $subject . "', '" . $body . "', '" . $currentdate . "', '" . $currenttime . "');");



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
                $mail->AddAddress($email_to);

            

                        if (!$mail->Send()) {
                            echo "Mailer Error: " . $mail->ErrorInfo;
                        } else {
                            header("Location: ../accepted_tables.php?error=none");
                            
                        }
                    
                    
                    

                    ?>