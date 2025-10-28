<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $service_type = htmlspecialchars($_POST['service_type']);
    $date = htmlspecialchars($_POST['date']);
    $message = htmlspecialchars($_POST['message']);

    // Admin email
    $adminEmail = 'admin@cavaluxuryrentals.com'; // Change to your admin email
    $subjectAdmin = "New Quote Request from $name";
    $bodyAdmin = "You have received a new quote request:\n\n"
        . "Name: $name\n"
        . "Email: $email\n"
        . "Phone: $phone\n"
        . "Service Type: $service_type\n"
        . "Date: $date\n"
        . "Message: $message\n";

    // Client email
    $subjectClient = "Thank You for Requesting a Quote";
    $bodyClient = "Dear $name,\n\nThank you for requesting a quote from Cava Luxury Rentals. Our team will contact you shortly.\n\n"
        . "Here’s a summary of your request:\n"
        . "Service: $service_type\n"
        . "Date: $date\n\n"
        . "Thank you for choosing us.\nCava Luxury Rentals";

    $headers = "From: no-reply@cavaluxuryrentals.com" . "\r\n" .
               "Reply-To: no-reply@cavaluxuryrentals.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Send emails
    $adminSent = mail($adminEmail, $subjectAdmin, $bodyAdmin, $headers);
    $clientSent = mail($email, $subjectClient, $bodyClient, $headers);

    if ($adminSent && $clientSent) {
        http_response_code(200);
        echo 'success';
    } else {
        http_response_code(500);
        echo 'error';
    }
} else {
    http_response_code(403);
    echo 'Forbidden';
}
?>
