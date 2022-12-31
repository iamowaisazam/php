<?php

// PHP - Sending Emails using PHP
// PHP must be configured correctly in the php.ini file with the details of how your system sends email. Open php.ini file available in /etc/ directory and find the section headed [mail function].
// Windows users should ensure that two directives are supplied. The first is called SMTP that defines your email server address. The second is called sendmail_from which defines your own email address.
// The configuration for Windows should look something like this −


// Sending plain text email
// PHP makes use of mail() function to send an email. This function requires three mandatory arguments that specify the recipient's email address, the subject of the the message and the actual message additionally there are other two optional parameters.

//  Parameter & Description

//  1.to
// Required. Specifies the receiver / receivers of the email
// 2.subject
// Required. Specifies the subject of the email. This parameter cannot contain any newline characters
// 3.message
// Required. Defines the message to be sent. Each line should be separated with a LF (\n). Lines should not exceed 70 characters
// 4.headers
// Optional. Specifies additional headers, like From, Cc, and Bcc. The additional headers should be separated with a CRLF (\r\n)
// 5.parameters
// Optional. Specifies an additional parameter to the send mail program

$to = "somebody@example.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);



?>