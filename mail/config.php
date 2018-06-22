<?php
/*----------------------------------------------

Basic settings for sending an email

----------------------------------------------*/

// Language and Encode settings
mb_language("English");
mb_internal_encoding("UTF-8");

// Messages
$email_sccess_message = "Your message has been sent successfully!";
$email_failed_message = "Failed to send your message. Please contact the webmaster.";

// Your Email information that are used both in auto-send emails and notification emails.
$your_email = "Your Email";
$your_name = "Your Name";
$your_fullemail = $your_name . "<" . $your_email . ">";



/*----------------------------------------------

A confirmation email sent to users automatically

----------------------------------------------*/

$auto_flag = true; // Activation for auto-reply function
$auto_header = '';
$auto_header .= "Content-Type: text/plain \r\n";
$auto_header .= "Return-Path: " . $your_email . " \r\n";
$auto_header .= "From: " . $your_fullemail ." \r\n";
$auto_header .= "Sender: " . $your_email ." \r\n";
$auto_header .= "Reply-To: " . $your_fullemail . " \r\n";
$auto_header .= "Organization: " . $your_name . " \r\n";
$auto_header .= "X-Sender: " . $your_email . " \r\n";
$auto_header .= "X-Priority: 3 \r\n";
$auto_from = $your_fullemail;
$auto_subject = "Thank you for your inquiry";
$auto_body = <<<__EOD__
Dear {$_POST["fullname"]},

Thank you for your inquiry.
We review your message and respond to you as soon as possible.

Support Team
{$your_name}
{$your_email}
__EOD__;



/*----------------------------------------------

A notification email sent to you

----------------------------------------------*/
$to = $your_email;
$subject = "You got an email";
$post_fullname = $_POST["fullname"];
$post_email = $_POST["email"];
$post_tel = $_POST["tel"];
$post_fullemail = $post_fullname."<".$post_email.">";
$header = '';
$header .= "Content-Type: text/plain \r\n";
$header .= "Return-Path: " . $post_email . " \r\n";
$header .= "From: " . $post_fullemail ." \r\n";
$header .= "Sender: " . $post_email ." \r\n";
$header .= "Reply-To: " . $post_fullemail . " \r\n";
$header .= "Organization: " . $post_email . " \r\n";
$header .= "X-Sender: " . $post_email . " \r\n";
$header .= "X-Priority: 3 \r\n";
$post_massage = <<<__EOD__
You received the following message from your customer.

-----------------------------
Full Name : {$_POST["fullname"]}
Email : {$_POST["email"]}
Tel : {$_POST["tel"]}
Message : 
{$_POST["message"]}
-----------------------------

This email is sent to you automatically by the system.
__EOD__;
?>