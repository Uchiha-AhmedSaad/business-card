<?php

if(!isset($_POST['to'])) {
    echo '<form action="' . $_SERVER['PHP_SELF'] . '" method="POST">input email<input type="text" name="to"><input type="submit" value="Send"></form>';
    die;
}


include 'class.phpmailer.php';

function phpMailer($to, $from, $fromName, $replyto, $replytoName, $subject, $body) { 
	$result = array();
	$mail = new PHPMailer();
	$mail->CharSet = 'utf-8';
	$mail->SetFrom($from, $fromName);
	$mail->Subject = $subject;
	$mail->IsHTML(true);
	$mail->Body = $body;
	$mail->ClearReplyTos();
	$mail->AddReplyTo($replyto, $replytoName);
	$mail->AddAddress($to);
	if(!$mail->Send()) {
		echo 'Mail error: '.$mail->ErrorInfo;
	} else {
	$result[0] = true;
		echo 'Message sent!';
	}
}

$from = 'info@' . preg_replace('/^www\./i', '', $_SERVER['HTTP_HOST']);
phpMailer($_POST['to'], $from, 'info', $from, 'info', 'Test', 'Just test');
?>
