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


            $mail->Host = "smtp.gmail.com";
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // sender's mail
            $mail->Username = 'hshi38612@gmail.com';
            $mail->Password = 'luja yjad jmdk asdl';

            $mail->setFrom("hshi38612@gmail.com", "Contact Form");
            $mail->addReplyTo($email, $name);

            // reciever's mail
            $mail->addAddress("chunsokna69@gmail.com");

            $mail->Subject = $subject;
            $mail->Body = $message;

            $mail->send();

            echo "Successfully sent message";

        }catch(Exception $e){
            echo "Mail error{$mail->ErrorInfo}";
        }
    }