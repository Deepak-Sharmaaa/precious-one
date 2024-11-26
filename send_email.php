<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $reply = htmlspecialchars($_POST['reply']);
    $to = "deepakkth583@gmail.com"; // Replace with your email
    $subject = "Reply from your special someone";
    $message = "Here is her reply:\n\n" . $reply;
    $headers = "From: no-reply@yourdomain.com"; // Replace with your domain

    if (mail($to, $subject, $message, $headers)) {
        echo "<h1>Thank you! Your reply has been sent. ❤️</h1>";
    } else {
        echo "<h1>Oops! Something went wrong. Please try again.</h1>";
    }
}
?>
