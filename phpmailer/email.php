<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
function sendOTP($email,$otp)
{
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function


//Load composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'khamkarmansi@gmail.com';                 // SMTP username
    $mail->Password = 'wqcxbijjliikquma';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('khamkarmansi@gmail.com', 'Mansi Khamkar');
    $mail->addAddress($email);     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'New OTP';
    $mail->Body    = 'Your new OTP is '.$otp;
    $mail->AltBody = 'Your new OTP is '.$otp;

    $mail->send();
    echo 'Message has been sent';
	return 1;
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
	return 0;
}
}
?>
<?php
if(isset($_POST["submit_email"])) {
	//$result = mysqli_query($conn,"SELECT * FROM registered_users WHERE email='" . $_POST["email"] . "'");
	//$count  = mysqli_num_rows($result);
	//if($count>0) {
		// generate OTP
		$otp = rand(100000,999999);
		// Send OTP
		$mail_status = sendOTP($_POST["emailid"],$otp);
		
		if($mail_status == 1) {
			//$result = mysqli_query($conn,"INSERT INTO otp_expiry(otp,is_expired,create_at) VALUES ('" . $otp . "', 0, '" . date("Y-m-d H:i:s"). "')");
			//$current_id = mysqli_insert_id($conn);
			//if(!empty($current_id)) {
				$success=1;
			//}
		}
	//} else {
		//$error_message = "Email not exists!";
	//}
}
/*
if(!empty($_POST["submit_otp"])) {
	$result = mysqli_query($conn,"SELECT * FROM otp_expiry WHERE otp='" . $_POST["otp"] . "' AND is_expired!=1 AND NOW() <= DATE_ADD(create_at, INTERVAL 24 HOUR)");
	$count  = mysqli_num_rows($result);
	if(!empty($count)) {
		$result = mysqli_query($conn,"UPDATE otp_expiry SET is_expired = 1 WHERE otp = '" . $_POST["otp"] . "'");
		$success = 2;	
	} else {
		$success =1;
		$error_message = "Invalid OTP!";
	}	
}
*/
?>
<html>
	<head></head>
	<body>
		<form method="post" name="emailform">
			<label>Enter Email</label>
			<input type="email" name="emailid">
			<button type="submit" name="submit_email">Submit</button>
		</form>
		
		<form method="post" name="emailform">
			<label>Enter OTP</label>
			<input type="text" name="otp">
			<button type="submit" name="submit_otp">Submit</button>
		</form>
	</body>
</html>