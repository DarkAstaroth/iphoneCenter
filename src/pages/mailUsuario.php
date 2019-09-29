<?php
try{
    include_once('mailConexion.php');
    $mail->setFrom('soporte@iphonecenter-bo.com', 'iPhoneCenter');
    $mail->addAddress($datosControllerPersona["email"]);
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->isHTML(true);
    $mail->Subject = 'Bienvenido a iPhoneCenter';
    include_once('welcomeMail.php');
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
    echo 'el mensaje se envio correctamente';
}
catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
