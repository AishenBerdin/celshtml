<?php

    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->Port = "587";
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";

    $mail->Username = "cels.megawide@gmail.com";
    $mail->Password = "m3g@w1dec3lz";

    $mail->setFrom('cels.megawide@gmail.com');
    $mail->addAddress('candiberdin@c1-link.com');
    $mail->addReplyTo('cels.megawide@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = "Test email from CELS Website";
    $mail->Body = "<h1>This is HTML h1 Heading</h1></br><p>This is html paragraph</p>";

    if ( $mail->send() ) {
      echo "Email Sent..!";
    }else{
      echo "Message could not be sent. Mailer Error: "{$mail->ErrorInfo};
    }

    $mail->smtpClose();
     

?>
