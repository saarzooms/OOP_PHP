<?php
require('phpmailer/class.phpmailer.php');
$mail = new PHPMailer();
$subject = "Test Mail using PHP mailer";
$content = "<b>This is a test mail using PHP mailer class.from Heroku</b>";
$mail->IsSMTP();
$mail->SMTPDebug = 1;
$mail->SMTPAuth = true;
$mail->SMTPSecure = "none";
$mail->Port     = 25;  
$mail->Username = "postmaster@sandbox89f874254d224787840918e8bf9a804f.mailgun.org";
$mail->Password = "31527ba1cdd587c4bc2e93d7ca3a3240";
$mail->Host     = "smtp.mailgun.org";
//$mail->Host     = "smtp.sendgrid.net";
//$mail->Host     = "smtp.gmail.com";
//$mail->Host     = "relay-hosting.secureserver.net";
$mail->Mailer   = "smtp";
$mail->SetFrom("vishal.rkcet@gmail.com", "Vishal Patel");
//$mail->AddReplyTo("vincy@phppot.com", "PHPPot");
$mail->AddAddress("vishalpatel16@gmail.com");
$mail->Subject = $subject;
$mail->WordWrap   = 80;
$mail->MsgHTML($content);
$mail->IsHTML(true);

if(!$mail->Send()) 
	echo "Problem on sending mail";
else 
echo "Mail sent";
?>
