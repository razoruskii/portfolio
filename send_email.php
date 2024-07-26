<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recipientEmail = $_POST['recipientEmail'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $subject = "New message from $name";
    $headers = "From: $email";

    if (mail($recipientEmail, $subject, $message, $headers)) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false]);
    }
}
?>
