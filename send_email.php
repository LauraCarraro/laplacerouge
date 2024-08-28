<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "laura.carraro@outlook.fr";
    $subject = "Nouveau message de contact de $name";
    $body = "Nom: $name\nEmail: $email\n\nMessage:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Merci pour votre message, $name ! Nous vous répondrons bientôt.";
    } else {
        echo "Une erreur est survenue. Veuillez réessayer.";
    }
}
?>
