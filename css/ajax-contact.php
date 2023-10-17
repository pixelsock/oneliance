<?php
// the E-Mail address that you want to recieve the message on.
$to_email = 'mcabrera@oneliance.com'; 
if (isset($_POST)) {
	// recieve the form variables and secure them
	$name = trim(strip_tags(addslashes($_POST['name']))); 
	$email = trim(strip_tags(addslashes($_POST['email'])));
	if (!empty($_POST['subject'])) {
		$subject = trim(strip_tags(addslashes($_POST['subject'])));
	} else {
		$subject = 'Message From Contact Form';
	}
	$message = trim(strip_tags(addslashes($_POST['message'])));
	// validate the form
	if (empty($name)) {
		echo 0;
	} elseif (empty($email)) {
		echo 0;
	} elseif (empty($message)) {
		echo 0;
	} else {
		// the message headers
		$headers = "From: " . strip_tags($email) . "\r\n";
		$headers .= "Reply-To: ". strip_tags($email) . "\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
		// submitting the message using PHP mail() function
		$send = mail($to_email, $subject, $message, $headers);
			if ($send) {
				echo 1;
			} else {
				echo 0;
			}
	}
}
?>