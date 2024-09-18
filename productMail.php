<?php
$data = json_decode(file_get_contents('php://input'), true);

$userName = $data['userName'];
$userEmail = $data['userEmail'];
$userMobile = $data['userMobile'];
$productTitle = $data['productTitle'];
$productDescription = $data['productDescription'];
$productImage = $data['productImage'];

$to = "Techlinx.ai@gmail.com";
$subject = "Product Details Shared by $userName";
$message = "
    <html>
    <head>
    <title>Product Details</title>
    </head>
    <body>
    <h2>Product Title: $productTitle</h2>
    <p>$productDescription</p>
    <p><b>User Name:</b> $userName</p>
    <p><b>Email:</b> $userEmail</p>
    <p><b>Mobile:</b> $userMobile</p>
    <img src='$productImage' alt='Product Image'>
    </body>
    </html>
";

// Set content-type for HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
$headers .= "From: no-reply@yourdomain.com" . "\r\n"; // Replace with your domain
$headers .= "Reply-To: $userEmail" . "\r\n";

// Send the email
$response = mail($to, $subject, $message, $headers);

echo json_encode(['success' => $response]);
?>
