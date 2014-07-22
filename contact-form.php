<?php

if (isset($_POST['submitted'])) {
	
	$recipient = "dikostaras@yahoo.gr";
	$subject = "Form to email message";
	$sender = $_POST ["name"];
	$senderEmail = $_POST ["email"];
	$senderAttending = $_POST ["radio_group"];
	$message = $_POST ["message"];
	
	$mailBody = "Name: $sender\nEmail: $senderEmail\n$senderAttending\n\n$message";
	
	mail ( $recipient, $subject, $mailBody, "From: $sender <$senderEmail>" );
	
}
?>