<?php 
	
	$name = $_REQUEST[ 'contact-name' ];
	$number = $_REQUEST[ 'contact-number' ];
	$email = $_REQUEST['contact-email'];
	$message = $_REQUEST[ 'contact-description' ];
	$mail_subject = "Inquiry" . "( Customer :".$name." )";
	$message = "Name: ".$name." \n\nEmail: ".$email." \n\nContact Number: ".$number." \n\nMessage: ".$message;
	
	/* Replace YOUR_MAIL With Your Mail Address inside '' */
	if ( mail( 'Email Id of reciever', $mail_subject, $message, "From: email id of receiver [eg. noreply@abc.com] " ) ) {
		echo "Thank you <strong>$name</strong> for contacting with us !!!";
	} else {
		echo "Error in sending message !!! Please try again";
	}
	
 ?>SS