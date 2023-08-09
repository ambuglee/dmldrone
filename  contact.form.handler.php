<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'lee.amber.alex@gmail.com';
$email_subject = "New Inquiry";

$email_body = "Name: $name.\n".
                "Email: $visitor_email.\n".
                    "Subject: $subject.\n".
                        "Message: $message.\n";

$to = "lee.amber.alex@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: index.html");



?>