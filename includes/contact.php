<?php
  session_start();
    // Include required phpmailer files
    require 'PhpMailer/PHPMailer.php';
    require 'PhpMailer/SMTP.php';
    require 'PhpMailer/Exception.php';

    // Define name spaces 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;


    $secret='6LdYJvAfAAAAALluOyMZmghWs0rC29VeC0nSpvYS';
    $verifyResponse = file_get_contents('https://google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);

if($responseData->success)
{

  $token = filter_input(INPUT_POST, 'csrf', FILTER_SANITIZE_STRING);

  if(isset($_SESSION['csrf'])){
    if (!$token || $token !== $_SESSION['csrf']) 
    {
      echo 'Request not allowed.';
      exit;
    }
  }else{
    echo "Please try again later.";
    exit;
  }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mail = new PHPMailer();                            // Create instance of phpmailer
    $mail->isSMTP();                                    // Set mailer to use smtp
    $mail->Host = 'mail.easysellph.com';                     // Defite smtp host
    $mail->SMTPAuth = "true";                           // Enable smtp authentication
    $mail->SMTPSecure = "ssl";                          // Set type of encryption
    $mail->Port = 465;                                  // Set port to connect smtp
    $mail->Username  = "noreply@easysellph.com";             // Set password
    $mail->Password  = "Thenew2020!";                       // Set password
    
    $mail->isHTML(true);                                // Enable html
    $mail->setFrom($email);                 // Set sender email
    $mail->Subject = "Message from Website Contact Form - " . $name;             // Set email subject
    $mail->addAddress("rjohnjimwell@gmail.com");              // Add receipient

    // Email body
    $mail->Body =  "
    <!DOCTYPE html>
<html lang='en' xmlns='http://www.w3.org/1999/xhtml' xmlns:o='urn:schemas-microsoft-com:office:office'>
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width,initial-scale=1'>
  <meta name='x-apple-disable-message-reformatting'>
  <title></title>

  <style>
    table, td, div, h1, p {font-family: Arial, sans-serif;}
  </style>
</head>
<body style='margin:0;padding:0;'>
  <table role='presentation' style='width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;'>
    <tr>
      <td align='center' style='padding:0;'>
        <table role='presentation' style='width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;'>
          <tr>
            <td align='center' style='padding:40px 0 30px 0;background:#70bbd9;'>
              <img src='https://assets.codepen.io/210284/h1.png' alt='' width='300' style='height:auto;display:block;' />
            </td>
          </tr>
          <tr>
            <td style='padding:36px 30px 42px 30px;'>
              <table role='presentation' style='width:100%;border-collapse:collapse;border:0;border-spacing:0;'>
                <tr>
                  <td style='padding:0 0 36px 0;color:#153643;'>
                    <h1 style='font-size:24px;margin:0 0 20px 0;font-family:Arial,sans-serif;'>You have received a new message from your website contact form.</h1>
                    <p style='margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;'>Here are the details:</p>
                        <h3 style='display: inline; font-family:Arial,sans-serif;'>Name: </h3><p style='display: inline; font-family:Arial,sans-serif; font-size:16px;'>$name</p><br>
                        <h3 style='display: inline; font-family:Arial,sans-serif;'>Email: </h3><p style='display: inline; font-family:Arial,sans-serif; font-size:16px;'>$email</p><br><br>
                        <h3 style='display: inline; font-family:Arial,sans-serif;'>Subject:</h3>
                        <p style='display: inline; margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;'>$subject</p>
                        <h3 style='font-family:Arial,sans-serif;'>Message:</h3>
                        <p style='margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;'>$message</p>
                    
                  </td>
                </tr>
               
                </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>

        </table>
      </td>
    </tr>
  </table>
</body>
</html>

 ";

                
    if($mail->Send()){
        echo 'OK';
    }else {
        // echo "Sorry, please try again!" . $mail->ErrorInfo;   
        echo "Sorry, please try again!" . $mail->ErrorInfo;
    }


    // Close smtp connection
    $mail->smtpClose();

}
else{
    echo 'Please check the recaptcha and try again.';
}

?>