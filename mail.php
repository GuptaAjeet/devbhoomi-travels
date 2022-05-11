<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require_once('globals.php');


function sendMail(
    $mailMessage,
    $subject,
    $toAddress
): bool {
   
    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = 2;                                       
        $mail->isSMTP();                                            
        $mail->Host       = $GLOBALS['mailHost'];                    
        $mail->SMTPAuth   = true;                             
        $mail->Username   = $GLOBALS['mailUsername'];                 
        $mail->Password   = $GLOBALS['mailPassword'];                        
        $mail->SMTPSecure = 'tls';                              
        $mail->Port       = $GLOBALS['mailPort'];  
      
        $mail->setFrom($GLOBALS['mailFrom']);           
        $mail->addAddress($toAddress);
           
        $mail->isHTML(true);                                  
        $mail->Subject = $subject;
        $mail->Body    = $mailMessage;
        $mail->AltBody = 'Body in plain text for non-HTML mail clients';
        $mail->send();
        echo "Mail has been sent successfully!";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
   
    return mail($toAddress, $subject, $message, $headers);
}

?>