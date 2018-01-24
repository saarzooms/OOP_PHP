<?php
require('phpmailer/class.phpmailer.php');
$mail = new PHPMailer();
$subject = "Test Mail using PHP mailer";
$content = "<b>This is a test mail using PHP mailer class.</b>";
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = false;
$mail->SMTPSecure = "none";
$mail->Port     = 25;  
$mail->Username = "vishalpatel16@gmail.com";
$mail->Password = "251119884";
//$mail->Host     = "localhost";
//$mail->Host     = "smtp.gmail.com";
$mail->Host     = "relay-hosting.secureserver.net";
$mail->Mailer   = "smtp";
$mail->SetFrom("vishalpatel16@gmail.com", "Vishal Patel");
//$mail->AddReplyTo("vincy@phppot.com", "PHPPot");
$mail->AddAddress("vishal.rkcet@gmail.com");
$mail->Subject = $subject;
$mail->WordWrap   = 80;
$mail->MsgHTML($content);
$mail->IsHTML(true);

if(!$mail->Send()) 
	echo "Problem on sending mail";
else 
echo "Mail sent";
?>