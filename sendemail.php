<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['firstname'];
  $email = $_POST['email'];
  $lastname = $_POST['lastname'];
  $phone=$_POST['phone'];
    $company_name = $_POST['company_name'];
    $job_title = $_POST['job_title'];
    $industry = $_POST['industry'];
    $company_size = $_POST['company_size'];
    $message = $_POST['message'];

  try{
    $mail->isSMTP();
    $mail->Host = "mail.alphaware.io";
    $mail->SMTPAuth = 'yes';
    $mail->Username = 'info@alphaware.io'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'rA)Orc(zM2E('; // Gmail address Password
    $mail->SMTPSecure ='ssl';
    $mail->Port = '465';

    $mail->setFrom('info@alphaware.io'); // Gmail address which you used as SMTP server
    $mail->addAddress('as7309087682@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Contact Page)';
    $mail->Body = "<h3>Name : $name  <br>Last Name : $lastname <br>Email: $email <br>Phone : $phone
    <br>Company Name : $company_name <br>Job title : $job_title <br>Industry : $industry <br>Company Size : $company_size
    <br>Message : $message
    </h3>";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Message Sent! Thank you for contacting us.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>