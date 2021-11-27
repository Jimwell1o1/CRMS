<?php
use PHPMailer\PHPMailer\PHPMailer;
include('../includes/dbh.inc.php');

if(isset($_POST['username']) && isset($_POST['submit'])){


$username = $_POST['username'];

$set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$key=substr(str_shuffle($set), 0, 12);


$query=mysqli_query($conn,"SELECT * FROM users WHERE usersUid='$username'");
$row=mysqli_fetch_array($query);
$uid = $row['usersId'];
$email = $row['usersEmail'];

mysqli_query($conn,"UPDATE `users` SET `usersCode` = '$key' WHERE `users`.`usersId` = $uid");

//start email
$output = '';

$output.='<p>Please click on the following link to validate your account.</p>';
//replace the site url
$output.="<p><a href='http://localhost/crms/forms/activate.php?uid=$uid&code=$key' target='_blank'>CLICK HERE TO ACTIVATE</a></p>";
$body = $output;
$subject = "MCY ACCOUNT VERIFY";

$email_to = $email;


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
 $mail->FromName = "MCY Dental Clinic Account Verification";

 $mail->Subject = $subject;
 $mail->Body = $body;
 $mail->AddAddress($email_to);

 if (!$mail->Send()) {
     echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
     echo "<div class='alert alert-success alert-dismissible'>
     <button type='button' class='close' data-dismiss='alert'>&times;</button>
     An email has been sent, kindly please<br> check your email account.
   </div>";
 }


$_SESSION['sign_msg'] = "Verification code sent to your email.";
header("Location: ../email-verification.php?error=sent");
exit();

}
?>