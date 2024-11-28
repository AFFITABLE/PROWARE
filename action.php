<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "affidesk1.com"; // Recipient's email address
    $name = "Query from categories";
    $email = "This is the body of the email.";
    $phone = "From: sender@example.com" . "\r\n" .
               "Reply-To: sender@example.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>
