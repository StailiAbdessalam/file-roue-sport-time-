<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";

class SendEmail
{
    public function admin($subject,$body,$name,$email)
    {
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "";//email
        $mail->Password = "";//password
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";


        $mail->isHTML(true);
        $mail->setFrom("",$name);//email from
        $mail->addAddress($email);//email to
        $mail->Subject = ("$subject");
        $mail->Body = $body;

        return $mail->send();
    }
}