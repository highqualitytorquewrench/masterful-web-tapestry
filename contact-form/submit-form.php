<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(strip_tags(trim($_POST["name"])));
    $email = htmlspecialchars(strip_tags(trim($_POST["email"])));
    $message = htmlspecialchars(strip_tags(trim($_POST["message"])));

    // Plz no steal mah email thx y'all
    $to = "klagge@uchicago.edu";
    $subject = "New message from $name";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

    // Send the email
    mail($to, $subject, $message, $headers);

    // Redirect to a thank you page or back to the contact form
    header("Location: contact-us?submitted=true");
    exit;
}

?>
