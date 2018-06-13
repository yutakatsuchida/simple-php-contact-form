<?php
	require_once("functions.php");
	$errorFlag = false;
	$errorMessages = array();
	$msg = "";

	if(empty($_POST["fullname"])) {
		$errorMessages[] = "Full Name is empty";
		$errorFlag = true;
	} 
	if (empty($_POST["email"])) {
		$errorMessages[] = "Email is empty";
		$errorFlag = true;
	} elseif (!is_email($_POST["email"])) {
		$errorMessages[] = "Invalid Email Address";
		$errorFlag = true;
	}

	if (empty($_POST["tel"])) {
		$errorMessages[] = "Telephone Number is empty";
		$errorFlag = true;
	} elseif(!is_telephonenumber($_POST["tel"])) {
		$errorMessages[] = "Invalid Telephone Number";
		$errorFlag = true;
	}

	if (empty($_POST["message"])) {
		$errorMessages[] = "Message is empty";
		$errorFlag = true;
	}

	if ($errorFlag) {
		$msg .= "<p>Please confirm the following information.</p>";
		$msg .= "<ul>";
		foreach ($errorMessages as $errorMessage) {
			$msg .= "<li>" . $errorMessage . "</li>";
		}
		$msg .= "</ul>";
		echo $msg;
	}

?>