<?php

use PHPMailer\PHPMailer\PHPMailer;
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  




if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])){



    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $body = $_POST['message']; 

    $output = '';
      
    $output.='<h2>From:    '. $name . '</h2>';
    $output.='<p><b>Email:    '. $email . '</b></p>';
    $output.='<p><b>Subject:    '. $subject . '</b></p>';
    $output.='<p><b>Message: </b></p>';
    //replace the site url
    $output.='<p>'. $body  . '</p>';
    $body = $output;

    require("../vendor/autoload.php");
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Host = "smtp.gmail.com"; // Enter your host here
    $mail->SMTPAuth = true;
    $mail->Username = "clinicmcydental@gmail.com"; // Enter your email here
    $mail->Password = "MCYdentaladmin01"; //Enter your passwrod here
    $mail->Port = 587;

    $mail->IsHTML(true);
    $mail->setFrom($email, $name);
    $mail->FromName = $name;
  
    $mail->Subject = ("Contact Us - " .  "$email ($subject)");
    $mail->Body = $body;
    $mail->AddAddress("clinicmcydental@gmail.com");
    if ($mail->Send()) {
        echo "Your message has been sent. Thank you!";
    } else {
      echo $mail->ErrorInfo;
      die( 'Unable to send the message, error occured,');
    }
}
  ?>
  