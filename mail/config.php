<?php
$encode="UTF-8";
$email = "Your Email Address";
// A notification email sent to you
$to = $email;
$from = $email;
$subject = "You got an email";

// A confirmation email sent to users automatically
$auto_flag = true;
$auto_from = $email;
$auto_subject = "Thank you for your inquiry";
$auto_body = <<<__EOD__
Thank you for your inquiry.

This is an email body.
This is an email body.
This is an email body.
This is an email body.

------------------------
Your contact information
------------------------
__EOD__;
?>