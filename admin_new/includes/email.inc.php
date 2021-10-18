<?php
use PHPMailer\PHPMailer\PHPMailer;
                $conn = mysqli_connect("localhost", "root", "", "phpproject01");
                if (mysqli_connect_errno()) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    die();
                }
                date_default_timezone_set('Asia/Manila');
                $error = "";
                
                //$recipient = "rjohnjimwell@gmail.com";
                $recipient = $_POST['sendto'];
                $userOne = $_POST['useremail'];
                $subject = $_POST['subject'];
                $body2 = $_POST['body'];

    

                //$expFormat = mktime(date("H"), date("i"), date("s"), date("m"), date("d"), date("Y"));
                $currentdate = date("Y-m-d H:i:s");
                $currenttime = date("h:i:s");
                
                // Insert Temp Table
                
                $output="";
                //replace the site url
                $output.='<p>' . $body2.  '</p>';
                $body = $output;
                $subject = $_POST['subject'];

                //$email_to = $recipient;

                mysqli_query($conn, "INSERT INTO `emails` (`emailReceiver`, `emailSubject`, `emailBody`, `emailDate`, `emailTime`) VALUES ('" . $recipient . "', '" . $subject . "', '" . $body . "', '" . $currentdate . "', '" . $currenttime . "');");



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

            



                     if (isset($_POST["submit"])) {

                        if($_POST['sendto'] == "All"){
                            $sql = "SELECT * FROM users;";
                            $result = mysqli_query($conn, $sql);//
                            if(mysqli_num_rows($result) > 0){

                                while($x = mysqli_fetch_assoc($result)){

                                    $mail->addBCC($x['usersEmail']);
                                }

                             }else{
                                header("Location: ../email_sender.php?error=nodatafound");
                             }
                        }elseif($_POST['sendto'] == "user"){
                            $email_to = $userOne;
                            $mail->AddAddress($email_to);
                            
                        }

                        if (!$mail->Send()) {
                            echo "Mailer Error: " . $mail->ErrorInfo;
                        } else {
                            header("Location: ../email_sender.php?error=none");
                            
                        }
                    
                    }
                    

                    ?>