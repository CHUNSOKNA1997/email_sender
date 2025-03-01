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
            

        }catch(Exception $e){

        }
    }