<?php
$send_mail = null;
//error_reporting(0);
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	require "PHPMailer-master/src/Exception.php";
	require "PHPMailer-master/src/PHPMailer.php";
	require "PHPMailer-master/src/SMTP.php";

	function send_mail($recpient,$subject,$message){
		$mail = new PHPMailer();
		$mail->IsSMTP();

		$mail->SMTPDebug 	   = 0;
		$mail->SMTPAuth        = TRUE;
		$mail->SMTPSecure      = "tls";
		$mail->Port 		   = 587;
		$mail->Host 		   = "smtp.gmail.com";
		$mail->Username 	   = "atuhub.social.media@gmail.com";
		$mail->Password 	   = "niyeqqzkwctbaylt";

		$mail->IsHTML(true);
		$mail->AddAddress($recpient, '$email');
		$mail->SetFrom("atuhub.social.media@gmail.com", "Online Crime Reporting System" );

		$mail->Subject = $subject;
		$content = $message;

		$mail->MsgHTML($content);
		if (!$mail->Send()) {
			$error = "Error sending email";
			//var_dump($mail);
			return false;
		}else{
			// $msg = "Email sent successfully";
		}
	}	

	$sendMail = send_mail($email,"Verification code",$code);
	if ($send_mail == send_mail($email,"Verification code",$code)) {

		//update to set a verification code base on user email in db
		$updateQuery = "UPDATE users SET code = $code WHERE email = '$email'";
		$update = $conn->exec($updateQuery);

		//redirect user to enter verification code
		header('Location: ./verification.php'); 
	}else{
		$msg = "Email is not sent";
	}

?>