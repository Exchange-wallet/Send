<?php
$to = "worldson70@gmail.com";
$subject = "Test Email";
$message = "This is a test email from my website.";
$headers = "From: noreply@yourwebsite.com";

if(mail($to, $subject, $message, $headers)){
    echo "Email sent successfully!";
} else {
    echo "Failed to send email. Your hosting may not allow PHP mail().";
}
?>