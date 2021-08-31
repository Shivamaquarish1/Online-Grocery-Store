 
 <?php
if(!class_exists('PHPMailer')) {
    require('phpmailer/class.phpmailer.php');
	require('phpmailer/class.smtp.php');
}

require_once("mail_configuration.php");

$mail = new PHPMailer();

$emailBody = "<div>" . $user["u_unm"] . ",<br><br><p>Click this link to recover your password<br><a href='" . PROJECT_HOME . "php-forgot-password-recover-code/reset_password.php?name=" . $user["u_unm"] . "'>" . PROJECT_HOME . "php-forgot-password-recover-code/reset_password.php?name=" . $user["u_unm"] . "</a><br><br></p>Regards,<br> Admin.</div>";

$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port     = PORT;  
$mail->Username = MAIL_USERNAME;0
$mail->Password = MAIL_PASSWORD;
$mail->Host     = MAIL_HOST;
$mail->Mailer   = MAILER;

$mail->SetFrom(SENDER_EMAIL, SENDER_NAME);
$mail->AddReplyTo(SENDER_EMAIL, SENDER_NAME);
$mail->ReturnPath=SENDER_EMAIL;	
$mail->AddAddress($user["u_email"]);
$mail->Subject = "Forgot Password Recovery";		
$mail->MsgHTML($emailBody);
$mail->IsHTML(true);

if(!$mail->Send()) {
	$error_message = 'Problem in Sending Password Recovery Email';
}
 else 
{
	$success_message = 'Please check your email to reset password!';
}

?>
