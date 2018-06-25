<?php

	require_once("functions.php");
	$errorFlag = false;
	$errorMessages = array();
	$msg = "";

	if(empty($_POST["fullname"])):
		$errorMessages[] = "Full Name is empty";
		$errorFlag = true;
	endif;

	if (empty($_POST["email"])):
		$errorMessages[] = "Email is empty";
		$errorFlag = true;
	elseif (!is_email($_POST["email"])):
		$errorMessages[] = "Invalid Email Address";
		$errorFlag = true;
	endif;

	if (empty($_POST["tel"])):
		$errorMessages[] = "Telephone Number is empty";
		$errorFlag = true;
	elseif(!is_telephonenumber($_POST["tel"])):
		$errorMessages[] = "Invalid Telephone Number";
		$errorFlag = true;
	endif;

	if (empty($_POST["message"])):
		$errorMessages[] = "Message is empty";
		$errorFlag = true;
	endif;

	if (($_POST["province"]) == ""):
		$errorMessages[] = "Province is not choosed";
		$errorFlag = true;
	endif;

	if (empty($_POST["optionsRadios"])):
		$errorMessages[] = "optionsRadios is not choosed";
		$errorFlag = true;
	endif;

	if (empty($_POST["checkbox"])):
		$errorMessages[] = "Checkbox is not choosed";
		$errorFlag = true;
	endif;

	foreach ($_POST["checkbox"] as $checkbox) {
		print h($checkbox) . "<br>";
	}

	// There is no error, send an email
	if (!$errorFlag) {
		require_once("config.php");
		
		if (mb_send_mail($to, $subject, $post_massage, $header)) {
			// if the message is sent
			print $email_sccess_message;
		} else {
			// if the message is failed to send
			print $email_failed_message;
		}

		//$auto_header = "From: {$auto_from}";
		//echo $auto_mail, $auto_subject, $auto_body, $auto_header;
		if($auto_flag){
			$auto_mail = $post_email;
			$auto_body = preg_replace("/\x0D\x0A|\x0D|\x0A/", "\n", $auto_body);
			if (mb_send_mail($auto_mail, $auto_subject, $auto_body, $auto_header)){
				// if the message is sent
				print $email_sccess_message;
			} else {
				// if the message is failed to send
				print $email_failed_message;
			}
			
		}
	} else {
		// display an error message
		$msg .= "<p>Please confirm the following information.</p>";
		$msg .= "<ul>";
		foreach ($errorMessages as $errorMessage) {
			$msg .= "<li>" . $errorMessage . "</li>";
		}
		$msg .= "</ul>";
		print $msg;
	}

?>