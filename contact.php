<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "yourmail@gmail.com"; // নিজের email দাও
    $subject = "New Portfolio Message";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<h2 style='text-align:center;color:green'>Message sent successfully ✅</h2>";
    } else {
        echo "<h2 style='text-align:center;color:red'>Failed to send message ❌</h2>";
    }
}
