<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'live.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 587;
    $phpmailer->Username = 'api';
    $phpmailer->Password = '';                                //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('yourmail@gmail.com', 'Mailer_name');
    $mail->addAddress('ourmail@gmail.com', 'Mail User');     //Add a recipient
    $mail->addAddress('ourmail@gmail.com');               //Name is optional

    //Attachments
    $mail->addAttachment('/path to file');         //Add attachments
    $mail->addAttachment('/path to file');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
