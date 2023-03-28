<?php

$to = "your-email@example.com";
$subject = "Test email";
$message = "This is a test email.";
$headers = "From: no-reply@example.com\r\n";

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Email could not be sent.";
}

?>
