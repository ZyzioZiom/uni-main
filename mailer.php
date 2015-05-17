<?php
require 'PHPMailer/PHPMailerAutoload.php';

// get welcome email template
if ($attended == 1) {
  $welcome_email = file_get_contents('mail/welcome_email_discount.php');
} else {
  $welcome_email = file_get_contents('mail/welcome_email.php');
}

// replace variables in mail content
$welcome_email = str_replace('%name%', $name, $welcome_email); 
$welcome_email = str_replace('%lastname%', $lastname, $welcome_email);
$welcome_email = str_replace('%amount%', intval($amount), $welcome_email);



$mail = new PHPMailer;

$mail->SMTPDebug = 3;                               // Enable verbose debug output
$mail->CharSet = "UTF-8";
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mandrillapp.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'patryk.kalinowski@gmail.com';                 // SMTP username
$mail->Password = $smtp_password;                           // SMTP password (in config file)
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->From = 'university@aiesec.org.pl';
$mail->FromName = 'AIESEC University';
$mail->addAddress($email, $name);     // Add a recipient              // Name is optional
$mail->addReplyTo('learnbyplay.krakow@gmail.com', 'AIESEC University');

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $name.", witaj w AIESEC University";
$mail->Body    = $welcome_email;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Message could not be sent. ';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';

}
?>