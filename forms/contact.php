<?php

    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";

    $mail->Username = "cels.megawide@gmail.com";
    $mail->Password = "m3g@w1dec3lz";

    $mail->setFrom($_POST['email'], 'CELS-Website AutoReply' );
    $mail->addAddress('jnones@megawide.com.ph');
    $mail->AddCC('gmsantos@megawide.com.ph');
    $mail->AddCC('cberdin@megawide.com.ph');
    $mail->addReplyTo($_POST['email'], $_POST['name']);

    $mail->isHTML(true);
    $mail->Subject = $_POST['subject'];
    $mail->Body = $_POST['message'];
    
    $mail->addAttachment('img/attachment.jpg');

    if ( $mail->send() ) {
      echo "Email Sent..!";
    }else{
      echo "Message could not be sent. Mailer Error: " . $mail->ErrorInfo;
    }

    $mail->smtpClose();
     

?>