<!-- <?php

    require_once '../PHPMailer/PHPMailerAutoload.php';

    if(isset($_POST['submit'])){

        if(!filter_var($senderEmail, FILTER_VALIDATE_EMAIL)){
            header("location: ../index.php?error=invalidEmail");
            exit();   
        }else {
            $recipientEmail = "markmella09@gmail.com";
            $subjectEmail = "Contact about Starbite Dental Clinic";
            $senderMessage = $_POST['sender-message'];
            $senderEmail = $_POST['sender-email'];
            $sender = "From: " . $senderEmail;

            $mail = new PHPMailer();
            
            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'ssl';
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = '465';
            $mail->isHTML(true);
            $mail->Username = '';
            $mail->Password = '';
            $mail->SetFrom('no-reply@starbite.com');
            $mail->Subject = $subjectEmail;
            $mail->Body = $senderMessage;
            $mail->addAddress($recipientEmail);

            $mail->Send();
            // mail($recipientEmail, $subjectEmail, $senderMessage, $sender);
                echo "done";
                header("location: ../index.php?error=none");
                exit(); 
            
        }
        
    }

?> -->