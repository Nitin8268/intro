<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["Subject"]; // Assign subject to a different variable
    $message = $_POST["message"];
    $to = "nk7060646828@gmail.com";
    $subject = "New Form Submission from $name";
    $headers = "From: $email";
    
    mail($to, $subject, $message, $headers);
    
    // Redirect to a thank you page
    header("Location: thank_you.php");
    exit;
}

?>
