<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $firstName = htmlspecialchars(trim($_POST['firstName']));
    $lastName = htmlspecialchars(trim($_POST['lastName']));
    $email = htmlspecialchars(trim($_POST['email']));
    $mobileNo = htmlspecialchars(trim($_POST['mobileNo']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Email content
    $to = "techlinx.ai@gmail.com";
    $subject = "New Form Submission from $firstName $lastName";
    $plainTextContent = "First Name: $firstName\nLast Name: $lastName\nEmail: $email\nMobile No: $mobileNo\nMessage: $message";
    $htmlContent = "
        <html>
        <head>
            <title>New Form Submission</title>
        </head>
        <body>
            <p>First Name: $firstName</p>
            <p>Last Name: $lastName</p>
            <p>Email: $email</p>
            <p>Mobile No: $mobileNo</p>
            <p>Message: $message</p>
        </body>
        </html>
    ";

    // Boundary 
    $boundary = md5(uniqid(time()));

    // Headers
    $headers = "From: no-reply@yourdomain.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/alternative; boundary=\"$boundary\"\r\n";

    // Message
    $body = "--$boundary\r\n";
    $body .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $body .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $body .= "$plainTextContent\r\n";
    $body .= "--$boundary\r\n";
    $body .= "Content-Type: text/html; charset=UTF-8\r\n";
    $body .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $body .= "$htmlContent\r\n";
    $body .= "--$boundary--";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        // Redirect to thank you page
        header("Location: thankyou.php");
        exit();
    } else {
        echo "Email sending failed...";
    }
} else {
    echo "Invalid request";
}
?>
