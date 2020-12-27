<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'phpmailer/vendor/autoload.php';


$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                     // Set mailer to use SMTP
    $mail->Host = 'localhost';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = false;                               // Enable SMTP authentication
    $mail->Username = '';                 // SMTP username
    $mail->Password = '';                           // SMTP password
    $mail->SMTPSecure = 'none';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 25;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('_mainaccount@mitcreative.com', 'MIT Creative');
    $mail->addAddress('khamkarmansi@gmail.com');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Message from client';
    $ordermsg = '';
    $ordermsg = '<html><body><table>
<tr><td>From  -  '.$name.'</td></tr><tr><td>Email ID  -  '.$emid.'</td></tr><tr><td>Phone No  -  '.$phno.'</td></tr><tr><td>Message - <br>'.$msg.'</td></tr>
</table></body></html>';
    $mail->Body    = $ordermsg;
    $mail->AltBody = 'Message from client';

    $mail->send();

    $mailstatus=1;
} catch (Exception $e) { ?>
    <script>
        alert("Unsuccessful <?php echo $mail->ErrorInfo ?>");
    </script>
<?php
}