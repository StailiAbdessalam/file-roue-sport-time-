<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class SendEmailModel
{
    public function sendEmail($body,$name,$email,$Password)
    {
        // var_dump($email);
        // var_dump($Password);
        // var_dump($name);
        // $mail = new PHPMailer(true);
        // var_dump($body);
mail($email, 'Welcome to the website', $body);
        // $mail->isSMTP();
        // $mail->Host = "smtp.gmail.com";
        // $mail->SMTPAuth = true;
        // $mail->Username = $email;//email // email dyal user
        // $mail->Password = $Password;//password // password dyal user
        // $mail->Port = 465;
        // $mail->SMTPSecure = "ssl";


        // $mail->isHTML(true);
        // $mail->setFrom($email,$name);//email from hta haada dyal li ghaysift li howa l user
        // $mail->addAddress("abdoycode@gmail.com");//email DIALK ABRO 
        // $mail->Subject = ("contact");
        // $mail->Body = $body;
        // if($mail->send()){
        //     echo true;
        // }else{
        //     echo "false";
        // }
        // // return $mail->send();
    }
}