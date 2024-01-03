# appointment-scheduler
Appointment Scheduler with PHPMailer 


For the PHP Mailer to work, the following checks need to be put in place

1. The vendor folder is in the same root directory as the index.php file (or which ever file which calls the PHPMailer is)
2. The vendor folder contains the composer folder
3. the vendor folder contains the PHPMailer folder
4. the vendor folder contains the autoload.php file
5. The root directory of where the index.php file is also contains the composer.json file
6. The root directory of where the index.php file is also contains the composer.lock file

This code calls upon the PHPMailer to execute, and as seen, should be called first thing in your PHP scripts, even before any session_start() if any:


<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;    
require 'vendor/autoload.php'; 




//The following is a successful GMAIL API configuration currently in use:

if (condition is met) {
     
        //send email section

       $business_email = "jennysdoubles@gmail.com";
     
        $mail = new PHPMailer(true);
        try {
            $mail->SMTPOptions = array('ssl'=>array('verify_peer'=>false,'verify_peer_name'=>false,'allow_self_signed' => true));
            //Server settings
            $mail->SMTPDebug = false;//SMTP::DEBUG_SERVER;                   // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'jennysdoubles@gmail.com';              // SMTP username
            $mail->Password   = 'tdxofiypzoqlohtq';                  // SECOND SMTP password (New App password from 3.1.24)
            $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                          // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom("jennysdoubles@gmail.com", "New Appointment Order");
            $mail->addAddress($business_email);     // Add a recipient
                       
           $body= "<br> You have just received a new E-mail notification<br><br>
           
<br><br>
Author: Owen Elwin
<br>
<br><hr>
";
            
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

}
}

?>
