<?php
    use PHPMailer\PHPMailer\PHPMailer;
    require './vendor/autoload.php';
    use PHPMailer\PHPMailer\Exception;

    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        try{
            $mail = new PHPMailer(true);

            $mail->isSMTP();
            $mail->SMTPAuth = true;


            $mail->Host = "smpt.gmail.com";
            $mail->SMTPSecure = 'ssl';
            $mail->Port='456';


            // sender's mail
            $mail->Username = 'hshi38612@gmail.com';
            $mail->Password = 'luja yjad jmdk asdl';

            $mail->setFrom("hshi38612@gmail.com", "Contact Form");
            $mail->addReplyTo($email, $name);

            // reciever's mail

        }catch(Exception $e){

        }
    }