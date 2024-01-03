<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;    
require 'vendor/autoload.php'; 
//session_start();


if (isset($_POST['submit'])){
  
        //send email section

 
        $email_recipient1 = "jennysdoubles@gmail.com";
        $email_recipient2 = "elwinowen@gmail.com";
	$email_recipient3 = "teksolucians@gmail.com";
     
        $mail = new PHPMailer(true);
        try {
            $mail->SMTPOptions = array('ssl'=>array('verify_peer'=>false,'verify_peer_name'=>false,'allow_self_signed' => true));
            //Server settings
            $mail->SMTPDebug = false;//SMTP::DEBUG_SERVER;                   // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'jennysdoubles@gmail.com';                     // SMTP username
            $mail->Password   = 'tdxofiypzoqlohtq';                               // SECOND SMTP password (New 3.1.24)
            $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                          // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                //Recipients
            $mail->setFrom("jennysdoubles@gmail.com", "SetFrom Alias Here");
            $mail->addAddress($email_recipient1);     // Add a recipient
	    $mail->addAddress($email_recipient2);
	    $mail->addAddress($email_recipient3);
	    $mail->addAddress("goanswerowen@gmail.com");  //fourth email recipient here added manually
            
              
            
           $body= "<br> You have just received a new appointment<br>Author: Owen Elwin<br><br><hr>";
            
            
            
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'New Appointment';
            $mail->Body    = $body;
            $mail->AltBody = strip_tags($body);


            if ($mail->send()){
                echo"Yay";
            }
            else{
                echo"Nay";
            }
        }
        catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {
               $mail->ErrorInfo
        }";
        
        
            }

}


?>
