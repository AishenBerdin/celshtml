<?php

    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPDebug = 3;
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";

    $mail->Username = "cels.megawide@gmail.com";
    $mail->Password = "m3g@w1dec3lz";

    $mail->setFrom('cels.megawide@gmail.com');
    $mail->addAddress('cberdin@megawide.com.ph');
    //$mail->addReplyTo('cels.megawide@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = "Test email from CELS Website";
    $mail->Body = "<h1>This is HTML h1 Heading</h1></br><p>This is html paragraph</p>";
    
    $mail->addAttachment('img/attachment.png');

    if ( $mail->send() ) {
      echo "Email Sent..!";
    }else{
      echo "Message could not be sent. Mailer Error: " . $mail->ErrorInfo;
    }

    $mail->smtpClose();
     

?>