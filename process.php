<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "kasmadushika@gmail.com";
    $subject = "Message from $fullname";
    $headers = "From: $email\r\n";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully. Thank you!";
    } 
    else {
        echo "Error sending the message.";
    }
}
?>