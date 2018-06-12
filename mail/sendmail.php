<?php
	require_once("functions.php");
	$errorFlag = false;
	$errorMessages = array();
	$msg = "";

	if(empty($_POST["fullname"])) {
		$errorMessages[] = "Full Name";
		$errorFlag = true;
	} 
	if (empty($_POST["email"])) {
		$errorMessages[] = "Email";
		$errorFlag = true;
	}
	if (empty(["tel"])) {
		$errorMessages[] = "Telephone Number";
		$errorFlag = true;
	}
	if (empty(["message"])) {
		$errorMessages[] = "Message";
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