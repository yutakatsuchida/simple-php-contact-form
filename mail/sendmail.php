<?php
	require_once("functions.php");
	$errorFlag = false;
	$errorMessages = array();
	$msg = "";

	if($_POST["fullname"] == "") {
		$errorMessages[] = "Full Name";
		$errorFlag = true;
	} 
	if ($_POST["email"] == "") {
		$errorMessages[] = "Email";
		$errorFlag = true;
	}
	if ($_POST["tel"] == "") {
		$errorMessages[] = "Telephone Number";
		$errorFlag = true;
	}
	if ($_POST["message"] == "") {
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